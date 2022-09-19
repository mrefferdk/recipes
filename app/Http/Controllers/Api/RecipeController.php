<?php

namespace App\Http\Controllers\Api;

use App\Http\Services\AccessService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
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
     * @return JsonResponse
     */
    public function show($id)
    {
        //dd(auth()->user());
        /** @var Recipe $recipe */
        $recipe = Recipe::with('ingredients')->find($id);
        //AccessService::hasAccess($recipe);
        return response()->json($recipe);
    }
}
