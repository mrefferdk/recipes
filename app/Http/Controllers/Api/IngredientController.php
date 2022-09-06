<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $str = request()->get('search');
        if ($str) {
            $sanitized = str_replace('%', '', $str);
            $ingredients = Ingredient::where('name', 'like', '%'.$sanitized.'%')->get();
        } else {
            $ingredients = Ingredient::all();
        }
        return response()->json($ingredients);
    }
}
