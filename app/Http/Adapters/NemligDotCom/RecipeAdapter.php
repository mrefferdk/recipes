<?php

namespace App\Http\Adapters\NemligDotCom;

use App\Models\Recipe;
use Illuminate\Support\Arr;

class RecipeAdapter
{
    static public function adapt($data)
    {
        $title = Arr::get($data, '');


        $recipe = new Recipe();
        $recipe->title = $title;

        return $recipe;
    }
}
