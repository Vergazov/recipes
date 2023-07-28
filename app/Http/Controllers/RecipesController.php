<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    public function create(){
        dd('create');
    }

    public function store(){
        dd('store');
    }

    public function show(){
        dd('show');
    }

    public function edit(){
        dd('edit');
    }

    public function update(){
        dd('update');
    }

    public function destroy(){
        dd('destroy');
    }
}
