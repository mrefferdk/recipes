<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TagController;
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


Route::middleware(\App\Http\Middleware\Authenticate::class)->group(function () {
    Route::post('/recipes', [RecipeController::class, 'store'])->middleware('recipe.form.validate')->name('recipes.store');
    Route::put('/recipes/{id}', [RecipeController::class, 'update'])->middleware('recipe.form.validate')->name('recipes.update');
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::get('/recipes/{id}/delete', [RecipeController::class, 'deleteConfirmation'])->name('recipes.delete.confirmation');
    Route::delete('/recipes/{id}', [RecipeController::class, 'delete'])->name('recipes.delete');
    Route::get('/scrape', [ScrapeController::class, 'index'])->name('scrape');
    Route::get('/logout', function () {
        Auth::guard('web')->logout();
        return redirect('/');
    });
});

Route::get('/', [RecipeController::class, 'index'])->name('recipes');
Route::get('/tags/{tag:slug}', [RecipeController::class, 'index']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

require __DIR__.'/auth.php';
