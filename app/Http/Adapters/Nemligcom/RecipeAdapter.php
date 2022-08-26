<?php

namespace App\Http\Adapters\Nemligcom;

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
     * Extracts the last number in a string. fx in "10-30 min" it returns "30"
     *
     * @param ?string $string
     * @return int|null
     */
    public static function extractTimeFromString(?string $string): ?int
    {
        $pattern = '/(\d+)/u';
        preg_match_all($pattern, $string, $matches);
        if ($lastMatchPair = end($matches)) {
            return end($lastMatchPair);
        }

        return null;
    }
}
