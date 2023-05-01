@extends('layouts.layout')
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body class="container mt-5">
    <div class="row gy-2">
        <a href="{{route('module.index')}}" class="btn btn-primary w-100">Модуль</a>
        <a href="{{route('user.index')}}" class="btn btn-primary w-100">Штатная стуктура</a>
    </div>
</body>
</html>
