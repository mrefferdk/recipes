<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecipeCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->post('/recipes', [
            'title' => 'recipe test',
        ]);

/*
        $user = User::factory()->create();

        $response = $this->actingAs($user)*/

        $response->assertStatus(302);
    }
}
