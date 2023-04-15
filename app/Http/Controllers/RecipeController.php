<?php

namespace App\Http\Controllers;

use App\Http\Services\AccessService;
use App\Http\Services\RecipeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\View\View;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Tag $tag): View
    {
        if (!$tag->id) {
            $tags = Tag::TopNavigation()->get();
        }

        $recipes = Recipe::ForUser()->Tag($tag->id)->orderBy('title')->get();
        return view('recipes.list', ['recipes' => $recipes, 'selectedTag' => $tag, 'tags' => $tags ?? null]);
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
            'tags' => Tag::TopNavigation()->get(),
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
        AccessService::hasReadAccessOrThrowException($recipe);

        $totalTime = (int) $recipe->work_time + (int) $recipe->cooking_time;
        return view('recipes.show', [
            'recipe' => $recipe,
            'showEditOptions' => $request->exists('showEditOptions'),
            'totalTime' => $totalTime,
            'canEdit' => AccessService::hasWriteAccess($recipe),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        /** @var Recipe $recipe */
        $recipe = Recipe::find($id);
        AccessService::hasWriteAccessOrThrowException($recipe);

        $numberOfIngredientFields = count($recipe->ingredients) + 10;
        return view('recipes.edit', [
            'method' => 'PUT',
            'action' => url('/recipes/' . $recipe->id),
            'title' => 'Rediger opskrift',
            'recipe' => $recipe,
            'numberOfIngredientFields' => $numberOfIngredientFields,
            'tags' => Tag::TopNavigation()->get(),
        ]);
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function deleteConfirmation(int $id): View
    {
        /** @var Recipe $recipe */
        $recipe = Recipe::find($id);
        AccessService::hasWriteAccessOrThrowException($recipe);

        return view('recipes.delete', [
            'action' => url('/recipes/' . $id),
            'title' => 'Slet opskrift',
            'recipe' => $recipe,
        ]);
    }

    public function delete(int $id): RedirectResponse
    {
        $recipe = Recipe::find($id);
        AccessService::hasWriteAccessOrThrowException($recipe);

        Recipe::destroy([$id]);
        //dd($recipe->delete());
        return redirect('/recipes');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        /** @var Recipe $recipe */
        $recipe = Recipe::find($id);
        AccessService::hasReadAccessOrThrowException($recipe);

        /** @var RecipeService $recipeService */
        $recipeService = app(RecipeService::class);

        $recipe = $recipeService->updateRecipeWithIngredients($request, $id);

        return redirect('/recipes/' . $recipe->id);
    }
}
