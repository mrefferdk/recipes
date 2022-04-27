<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/recipes', [\App\Http\Controllers\Api\RecipeController::class, 'index']);
Route::get('/v1/recipes/{id}', [\App\Http\Controllers\Api\RecipeController::class, 'show']);
Route::get('/v1/ingredient', [\App\Http\Controllers\Api\IngredientController::class, 'index']);
Route::get('/effer', [\App\Http\Controllers\Api\IngredientController::class, 'index']);
Route::get('/v1/scrape', [\App\Http\Controllers\Api\ScrapeController::class, 'index']);
