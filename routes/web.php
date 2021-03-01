<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/recipes', [RecipeController::class, 'index']);
Route::post('/recipes', [RecipeController::class, 'store'])->middleware('auth');
Route::get('/recipes/create', [RecipeController::class, 'create'])->middleware('auth');
Route::get('/recipes/{id}', [RecipeController::class, 'show']);
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->middleware('auth');
Route::put('/recipes/{id}', [RecipeController::class, 'update'])->middleware('auth');

Route::get('/ingredients/create', [IngredientController::class, 'create'])->middleware('auth');
Route::post('/ingredients', [IngredientController::class, 'store'])->middleware('auth');
Route::get('/ingredients/{id}/edit', [IngredientController::class, 'edit'])->middleware('auth');
Route::put('/ingredients/{id}', [IngredientController::class, 'update'])->middleware('auth');
Route::delete('/ingredients/{id}', [IngredientController::class, 'delete'])->middleware('auth');


require __DIR__.'/auth.php';
