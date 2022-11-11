<?php

namespace App\Http\Services;

use App\Models\Recipe;

class AccessService
{
    public static function hasReadAccessOrThrowException(Recipe $recipe): bool
    {
        if (!self::hasReadAccess($recipe)) {
            throw new \Exception('You shall not pass', 403);
        }

        return true;
    }

    public static function hasReadAccess(Recipe $recipe): bool
    {
        if ($recipe->user_id != null && $recipe->user_id !== auth()->user()->id) {
            return false;
        }

        return true;
    }

    public static function isAdmin(): bool
    {
        return auth()->user()?->admin ?? false;
    }

    public static function hasWriteAccessOrThrowException(Recipe $recipe): bool
    {
        if (!self::hasWriteAccess($recipe)) {
            throw new \Exception('You shall not pass', 403);
        }

        return true;
    }

    public static function hasWriteAccess(Recipe $recipe): bool
    {
        if (self::isAdmin()) {
            return true;
        }

        if (is_null(auth()->user()?->id) || $recipe->user_id !== auth()->user()?->id) {
            return false;
        }

        return true;
    }
}
