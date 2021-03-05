<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AdminController;
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

Route::get('/edit-toggle', [AdminController::class, 'toggleEditMode'])->name('edit-toggle');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::post('/recipes', [RecipeController::class, 'store'])->middleware('auth')->name('recipes.store');
Route::get('/recipes/create', [RecipeController::class, 'create'])->middleware('auth')->name('recipes.create');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->middleware('auth')->name('recipes.edit');
Route::put('/recipes/{id}', [RecipeController::class, 'update'])->middleware('auth')->name('recipes.update');

Route::get('/ingredients/create', [IngredientController::class, 'create'])->middleware('auth')->name('ingredients.create');
Route::post('/ingredients', [IngredientController::class, 'store'])->middleware('auth')->name('ingredients');
Route::get('/ingredients/{id}/edit', [IngredientController::class, 'edit'])->middleware('auth')->name('ingredients.edit');
Route::put('/ingredients/{id}', [IngredientController::class, 'update'])->middleware('auth')->name('ingredients.put');
Route::delete('/ingredients/{id}', [IngredientController::class, 'delete'])->middleware('auth')->name('ingredients.delete');


require __DIR__.'/auth.php';
