@extends('layouts.app')
@section('title')
    Список рецептов
@endsection
@section('content')
    <div class="container">
        <h2>Список рецептов</h2>
        <a href="#" class="btn btn-primary">Добавить новый</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название рецепта</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipes as $recipe)
            <tr>
                <th>{{$recipe->id}}</th>
                <td>{{$recipe->name}}</td>
                <td><a href="#" class="btn btn-primary">Описание рецепта</a></td>
                <td><a href="#" class="btn btn-danger">Удалить</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
