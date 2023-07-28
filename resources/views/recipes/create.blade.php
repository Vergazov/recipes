@extends('layouts.app')
@section('title')
    Создание рецепта
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('recipes.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Название рецепта</label>
            <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание рецепта</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('name')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
