<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    public function create(){
        return view('recipes.create');
    }

    public function store(RecipeRequest $req){
        Recipe::create($req->all());
        return redirect()->route('recipes.index');
    }

    public function show($id){
        $recipe = Recipe::find($id);
        return view('recipes.show',compact('recipe'));
    }


    public function edit($id){
        $recipe = Recipe::find($id);
        return view('recipes.edit',compact('recipe'));
    }

    public function update(Recipe $recipe, RecipeRequest $req){
        $recipe->update($req->all());
        return redirect()->route('recipes.index');

    }

    public function destroy(Recipe $recipe){
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
}
