<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Ingredient;

class IngredientController extends Controller
{
    public function create()
    {
        $recipeId = request('recipeId');
        return view('ingredients.create', compact('recipeId'));
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient();
        $ingredient->name = $request->get('name');
        $ingredient->amount = $request->get('amount');
        $ingredient->type = $request->get('type');
        $ingredient->recipe_id = $request->get('recipe_id');
        $ingredient->order = $request->get('order'); // TODO remove
        $ingredient->save();
        return redirect('/recipes/' . $request->get('recipe_id'));
    }

    public function edit($id)
    {
        $ingredient = Ingredient::find($id);
        return view('ingredients.edit', compact('ingredient'));
    }

    public function update(Request $request, $id)
    {
        $ingredient = Ingredient::find($id);
        $ingredient->name = $request->get('name');
        $ingredient->amount = $request->get('amount');
        $ingredient->type = $request->get('type');
        $ingredient->recipe_id = $request->get('recipe_id');
        $ingredient->order = $request->get('order'); // TODO remove
        $ingredient->save();
        return redirect('/recipes/' . $request->get('recipe_id'));
    }

    public function delete($id)
    {
        /** @var Ingredient $ingredient */
        $ingredient = Ingredient::find($id);

        if (empty($ingredient)) {
            throw new \Exception('Ingredient with this ID doesn\'t exist');
        }

        $recipeId = $ingredient->recipe_id;
        $ingredient->delete();

        return redirect('/recipes/' . $recipeId);
    }
}
