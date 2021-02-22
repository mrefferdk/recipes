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
}
