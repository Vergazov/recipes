<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="container w-50">
    <a href="{{route('recipes.index')}}" class="btn btn-primary">Список рецептов</a>
    <a href="{{route('recipes.create')}}" class="btn btn-primary">Добавить новый</a>
</nav>
<div class="container w-50">
    @yield('content')
</div>
</body>
</html>
