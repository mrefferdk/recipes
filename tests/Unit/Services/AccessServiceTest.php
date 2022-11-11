<?php

namespace Tests\Unit\Services;

use App\Http\Services\AccessService;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccessServiceTest extends TestCase
{
    use RefreshDatabase;

    public function testWriteAccessAnonymous()
    {
        $recipe = Recipe::factory()->create();
        $this->assertFalse(AccessService::hasWriteAccess($recipe));
    }

    public function testWriteAccessAdmin()
    {
        $recipe = Recipe::factory()->create();
        $user = User::factory()->make([
            'admin' => true,
        ]);
        $this->actingAs($user, 'web');

        $this->assertTrue(AccessService::hasWriteAccess($recipe));
    }

    public function testWriteAccessSameUser()
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'web');

        $recipe = Recipe::factory()->create([
            'user_id' => $user->id,
        ]);

        $this->assertTrue(AccessService::hasWriteAccess($recipe));
    }

    public function testWriteAccessDifferentUser()
    {
        $recipe = Recipe::factory()->create([
            'user_id' => 666,
        ]);

        $user = User::factory()->create();
        $this->actingAs($user, 'web');

        $this->assertFalse(AccessService::hasWriteAccess($recipe));
    }

    public function testWriteAccessAnonymousUser()
    {
        $recipe = Recipe::factory()->create([
            'user_id' => null,
        ]);
        
        $this->assertFalse(AccessService::hasWriteAccess($recipe));
    }
}
