<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(){
        return view('recipes.index');
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
