<?php

namespace App\Http\Services;

use App\Models\Recipe;

class AccessService
{
    public static function hasReadAccess(Recipe $recipe): bool
    {
        if ($recipe->user_id != null && $recipe->user_id !== auth()->user()->id) {
            throw new \Exception('You shall not pass', 403);
        }

        return true;
    }

    public static function hasWriteAccess(Recipe $recipe): bool
    {
        if ($recipe->user_id !== auth()->user()->id) {
            throw new \Exception('You shall not pass', 403);
        }

        return true;
    }
}
