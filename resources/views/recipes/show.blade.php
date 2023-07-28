@extends('layouts.app')
@section('title')
    Описание рецепта
@endsection
@section('content')
    <div class="container">
        <h2>Список рецептов</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название рецепта</th>
                <th scope="col">Описание</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{$recipe->id}}</th>
                    <td>{{$recipe->name}}</td></td>
                    <td>{{$recipe->description}}</td></td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('recipes.edit',[$recipe->id])}}" class="btn btn-primary">Редактировать рецепт</a>
    </div>
@endsection
