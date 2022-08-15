<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json($recipes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $recipe = Recipe::with('ingredients')->find($id);
        return response()->json($recipe);
    }

}
