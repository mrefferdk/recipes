<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $recipes = DB::table('recipes')->orderBy('title')->get();
        return view('recipes.list', ['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        $fileName = null;
        if ($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        }

        $recipe = new Recipe();
        $recipe->title = trim($request->get('title'));
        $recipe->body = $request->get('body');
        $recipe->number = $request->get('number');
        $recipe->cooking_time = (int) trim($request->get('cooking_time'));
        $recipe->work_time = (int) trim($request->get('work_time'));
        $recipe->image_path = $fileName;
        $recipe->save();


        $orderCounter = 0;
        foreach ($request->ingredients as $ingredientData) {
            if (!trim($ingredientData['name']) || !trim($ingredientData['amount']) || !trim($ingredientData['type'])) {
                continue;
            }

            // Check if all 3 are filled out
            $ingredient = Ingredient::create([
                'name' => trim($ingredientData['name']),
                'amount' => trim($ingredientData['amount']),
                'type' => trim($ingredientData['type']),
                'recipe_id' => $recipe->id,
                'order' => $orderCounter++,
            ]);
        }

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Request $request, $id): \Illuminate\View\View
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
     *
     * @param  int  $id
     */
    public function edit($id): \Illuminate\View\View
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        $fileName = $recipe->image_path;
        if ($request->file()) {
            $fileName = $recipe->id . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $fileName, 'public');
        }

        $recipe->title = trim($request->get('title'));
        $recipe->body = $request->get('body');
        $recipe->number = $request->get('number');
        $recipe->cooking_time = trim($request->get('cooking_time'));
        $recipe->work_time = trim($request->get('work_time'));
        $recipe->image_path = $fileName;
        $recipe->save();

        // Find all existing ingredients
        $existingIngredients = $recipe->ingredients();

        // Insert new ingredients
        $orderCounter = 0;
        foreach ($request->ingredients as $ingredientData) {
            if (!trim($ingredientData['name']) || !trim($ingredientData['amount']) || !trim($ingredientData['type'])) {
                continue;
            }
            Ingredient::create([
                'name' => trim($ingredientData['name']),
                'amount' => trim($ingredientData['amount']),
                'type' => trim($ingredientData['type']),
                'recipe_id' => $recipe->id,
                'order' => $orderCounter++,
            ]);
        }

        // Delete old ingredients
        Ingredient::whereIn('id', $existingIngredients->pluck('id'))->delete();

        return redirect('/recipes/' . $id);
    }

}
