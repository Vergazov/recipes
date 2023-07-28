@extends('layouts.app')
@section('title')
   Редактирование рецепта
@endsection
@section('content')
    <form action="{{route('recipes.update',$recipe->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Название рецепта</label>
            <input type="text" id="name" class="form-control" name="name" value="{{$recipe->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание рецепта</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$recipe->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
