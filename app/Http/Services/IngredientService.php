<?php

namespace App\Http\Services;

use App\Models\Ingredient;

class IngredientService
{
    public function saveIngredients(array $ingredients, int $recipeId): void
    {
        $orderCounter = 0;
        foreach ($ingredients as $ingredientData) {
            if (!trim($ingredientData['name']) || !trim($ingredientData['amount']) || !trim($ingredientData['type'])) {
                continue;
            }
            Ingredient::create([
                'name' => trim($ingredientData['name']),
                'amount' => trim($ingredientData['amount']),
                'type' => trim($ingredientData['type']),
                'recipe_id' => $recipeId,
                'order' => $orderCounter++,
            ]);
        }
    }
}
