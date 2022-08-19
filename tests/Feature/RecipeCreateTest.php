<?php

namespace Tests\Feature;

use App\Models\Recipe;
use App\Models\User;
use Database\Seeders\RecipeSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecipeCreateTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // TODO
    }

    public function testCreate()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/recipes', [
            'title' => 'recipe test',
            'body' => 'body',
            'number' => 1,
            'ingredients' => [],
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('recipes', [
            'title' => 'recipe test',
            'body' => 'body',
            'number' => 1,
            'active' => 0,
        ]);

    }

    public function testUpdate()
    {
        $user = User::factory()->create();

        $this->seed(RecipeSeeder::class);

        $response = $this->actingAs($user)->put('/recipes/1', [
            'title' => 'recipe test 2',
            'body' => 'body 2',
            'number' => 2,
            'active' => 1,
            'ingredients' => [],
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('recipes', [
            'title' => 'recipe test 2',
            'body' => 'body 2',
            'number' => 2,
            'active' => 1,
        ]);
    }
}
