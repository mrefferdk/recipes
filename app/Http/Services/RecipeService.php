<?php

namespace App\Http\Services;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeService
{

    public function createRecipeWithIngredients(Request $request): Recipe
    {
        // TODO move validation
        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        $recipe = new Recipe();
        $this->save($request, $recipe);

        if ($file = $request->file('image')) {
            $this->uploadAndAttachFilename($recipe, $file);
        }

        /** @var IngredientService $ingredientService */
        $ingredientService = app(IngredientService::class);
        $ingredientService->saveIngredients($request->ingredients, $recipe->id);

        return $recipe;
    }

    public function updateRecipeWithIngredients(Request $request, int $id): Recipe
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            throw new \Exception('Recipe is not found');
        }

        // Find all existing ingredients
        $existingIngredients = $recipe->ingredients()->get();
        $existingIngredientIds = $existingIngredients->pluck('id')->toArray();

        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        $this->save($request, $recipe);

        // Delete old ingredients
        Ingredient::whereIn('id', $existingIngredientIds)->delete();

        return $recipe;
    }

    private function save(Request $request, Recipe $recipe): void
    {
        $this->saveRecipe($request, $recipe);

        if ($file = $request->file('image')) {
            $this->uploadAndAttachFilename($recipe, $file);
        }

        /** @var IngredientService $ingredientService */
        $ingredientService = app(IngredientService::class);
        $ingredientService->saveIngredients($request->ingredients, $recipe->id);
    }

    private function uploadAndAttachFilename(Recipe $recipe, $fileObject): void
    {
        $fileName = $recipe->id . '.' . $fileObject->getClientOriginalExtension();
        $fileObject->storeAs('uploads', $fileName, 'public');
        $recipe->image_path = $fileName;
        $recipe->save();
    }

    private function saveRecipe(Request $request, Recipe $recipe): void
    {
        $recipe->title = trim($request->get('title'));
        $recipe->body = $request->get('body');
        $recipe->number = $request->get('number');
        $recipe->cooking_time = (int) trim($request->get('cooking_time'));
        $recipe->work_time = (int) trim($request->get('work_time'));
        $recipe->image_path = '$fileName';
        $recipe->save();
    }
}
