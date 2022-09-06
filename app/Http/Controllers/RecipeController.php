<?php

namespace App\Http\Controllers;

use App\Http\Services\RecipeService;
use App\Models\Ingredient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $recipes = DB::table('recipes')->orderBy('title')->get();
        return view('recipes.list', ['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $recipe = new Recipe();
        $recipe->number = 4;
        return view('recipes.edit', [
            'action' => url('/recipes'),
            'title' => 'Opret opskrift',
            'recipe' => $recipe,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        /** @var RecipeService $recipeService */
        $recipeService = app(RecipeService::class);
        $recipeService->createRecipeWithIngredients($request);

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, int $id): View
    {
        $recipe = Recipe::find($id);

        $totalTime = (int) $recipe->work_time + (int) $recipe->cooking_time;
        return view('recipes.show', [
            'recipe' => $recipe,
            'showEditOptions' => $request->exists('showEditOptions'),
            'totalTime' => $totalTime,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        /** @var Recipe $recipe */
        $recipe = Recipe::find($id);
        $numberOfIngredientFields = count($recipe->ingredients) + 10;
        return view('recipes.edit', [
            'method' => 'PUT',
            'action' => url('/recipes/' . $recipe->id),
            'title' => 'Rediger opskrift',
            'recipe' => $recipe,
            'numberOfIngredientFields' => $numberOfIngredientFields
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        /** @var RecipeService $recipeService */
        $recipeService = app(RecipeService::class);

        $recipe = $recipeService->updateRecipeWithIngredients($request, $id);

        return redirect('/recipes/' . $recipe->id);
    }
}
