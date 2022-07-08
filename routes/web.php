<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ScrapeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [RecipeController::class, 'index'])->name('recipes');
Route::get('/recipes', [RecipeController::class, 'index']);
Route::post('/recipes', [RecipeController::class, 'store'])->middleware('auth')->name('recipes.store');
Route::get('/recipes/create', [RecipeController::class, 'create'])->middleware('auth')->name('recipes.create');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->middleware('auth')->name('recipes.edit');
Route::put('/recipes/{id}', [RecipeController::class, 'update'])->middleware('auth')->name('recipes.update');
Route::get('/scrape', [ScrapeController::class, 'index'])->middleware('auth')->name('scrape');

// TEMP
Route::get('/v1/scrape', [ScrapeController::class, 'index']);

require __DIR__.'/auth.php';
