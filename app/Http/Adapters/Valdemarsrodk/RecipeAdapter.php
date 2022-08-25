<?php

namespace App\Http\Adapters\Valdemarsrodk;

use App\Http\Adapters\RecipeAdapterInterface;
use App\Models\Recipe;
use Illuminate\Support\Arr;

class RecipeAdapter implements RecipeAdapterInterface
{
    static public function adapt(array $data): Recipe
    {
        $title = Arr::get($data, 'title');
        $imageSrc = Arr::get($data, 'imageSrc');
        $description = Arr::get($data, 'description');
        $persons = Arr::get($data, 'persons');
        $instructions = Arr::get($data, 'instructions');

        $workTime = self::extractTimeFromString(Arr::get($data, 'workTime'));
        $totalTime = self::extractTimeFromString(Arr::get($data, 'totalTime'));
        $cookingTime = $totalTime - $workTime;

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

    /**
     * Extracts the first number in a string. fx in "10-30 min" it returns "10"
     *
     * @param ?string $string
     * @return int|null
     */
    public static function extractTimeFromString(?string $string): ?int
    {
        $pattern = '/(\d+) timer?/';
        preg_match($pattern, $string, $matches);

        if ($matches) {
            return $matches[1] * 60;
        }

        $pattern = '/(\d+) min/';
        preg_match($pattern, $string, $matches);
        if ($matches) {
            return $matches[1];
        }

        return null;
    }
}
