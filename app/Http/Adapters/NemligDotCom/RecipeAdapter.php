<?php

namespace App\Http\Adapters\NemligDotCom;

use App\Models\Recipe;
use Illuminate\Support\Arr;

class RecipeAdapter
{
    static public function adapt(array $data): Recipe
    {
        $title = Arr::get($data, 'title');
        $imageSrc = Arr::get($data, 'imageSrc');
        $description = Arr::get($data, 'description');
        $persons = Arr::get($data, 'persons');
        $instructions = Arr::get($data, 'instructions');

        $workTime = Arr::get($data, 'workTime');
        $totalTime = Arr::get($data, 'totalTime');
        $workTime = 666;
        $cookingTime = 777;
        // TODO lav algoritme til at tage det højeste tal fra "10-20 min" eller "50 min"

        $recipe = new Recipe([
            'title' => $title,
            'image_path' => $imageSrc,
            'body' => $instructions,
            'active' => false,
            'number' => $persons,
            'work_time' => $workTime,
            'cooking_time' => $cookingTime,
        ]);

        return $recipe;
    }
}
