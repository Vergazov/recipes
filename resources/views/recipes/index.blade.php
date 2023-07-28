@extends('layouts.app')
@section('title')
    Список рецептов
@endsection
@section('content')
    <div class="container">
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
                <th></th>
                <td>{{$recipe->name}}</td>
                <td><a href="{{route('recipes.show',$recipe->id)}}" class="btn btn-primary">Описание рецепта</a></td>
                <td>
                    <form action="{{route('recipes.destroy',$recipe->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
