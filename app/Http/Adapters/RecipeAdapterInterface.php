<?php

namespace App\Http\Adapters;

use App\Models\Recipe;

interface RecipeAdapterInterface
{
    public static function adapt(array $data): Recipe;
}
