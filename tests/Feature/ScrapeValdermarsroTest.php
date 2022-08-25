<?php

namespace Tests\Feature;

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

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockHttpRequest();
    }


    public function testScrape()
    {
        // TODO mock scraper result. Right now the actual site is being scraped.
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.valdemarsro.dk/something_fake_recipe'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('recipes', [
            'title' => 'Grøntsagsgryde med kikærter',
            'number' => 4,
            'active' => 0,
        ]);
    }

    public function testAlreadyScraped()
    {
        // TODO mock scraper result. Right now the actual site is being scraped.
        $user = User::factory()->create();
        $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.valdemarsro.dk/something_fake_recipe'
        ]);

        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.valdemarsro.dk/something_fake_recipe'
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
