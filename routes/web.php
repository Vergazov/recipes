<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/recipes',[RecipesController::class,'index'])->name('recipes.index');
Route::get('/recipes/create',[RecipesController::class, 'create'])->name('recipes.create');
Route::get('/recipes/{recipe}',[RecipesController::class,'show'])->name('recipes.show');
Route::get('/recipes/{recipe}/edit',[RecipesController::class, 'edit'])->name('recipes.edit');
Route::post('/recipes',[RecipesController::class, 'store'])->name('recipes.store');
Route::delete('/recipes/{recipe}',[RecipesController::class, 'destroy'])->name('recipes.destroy');
Route::patch('/recipes/{recipe}',[RecipesController::class, 'update'])->name('recipes.update');
