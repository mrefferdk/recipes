<?php

namespace App\Http\Services;

use App\Models\Recipe;

class AccessService
{
    public static function hasAccess(Recipe $recipe): bool
    {
        if ($recipe->user_id !== auth()->user()->id) {
            throw new \Exception('You shall not pass', 403);
        }

        return true;
    }
}
