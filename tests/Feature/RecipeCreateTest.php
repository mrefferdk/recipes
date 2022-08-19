<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecipeCreateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
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
}
