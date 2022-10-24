<?php

namespace Tests\Feature;

use App\Http\Services\UserHashService;
use App\Models\Recipe;
use App\Models\User;
use Database\Seeders\RecipeSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Mockery\MockInterface;
use Tests\Feature\Mocks\ValdemarsroHtml;
use Tests\TestCase;

class ScrapeValdermarsroTest extends TestCase
{
    use RefreshDatabase;

    private $userId;
    private $userIdHash;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockHttpRequest();
        $this->userId = 1;
        $this->userIdHash = UserHashService::getUserHashById($this->userId);
    }


    public function testScrape()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.valdemarsro.dk/something_fake_recipe',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('recipes', [
            'title' => 'Grøntsagsgryde med kikærter',
            'number' => 4,
            'active' => 0,
        ]);

        $this->assertDatabaseCount('ingredients', 22);
        $this->assertDatabaseHas('ingredients', [
            'name' => "stødt koriander",
            'amount' => '1',
            'type' => 'tsk',
            'order' => 1,
        ]);
    }

    public function testAlreadyScraped()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.valdemarsro.dk/something_fake_recipe',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.valdemarsro.dk/something_fake_recipe',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response->assertStatus(400);
    }

    private function mockHttpRequest(): void
    {
        $mockHtml = ValdemarsroHtml::getHtml();
        $responseMock = $this->mock(Response::class, function (MockInterface $mock) use ($mockHtml) {
            $mock->shouldReceive('body')->andReturn($mockHtml);
        });
        Http::shouldReceive('get')->andReturn($responseMock);
    }
}
