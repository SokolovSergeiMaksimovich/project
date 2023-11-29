@extends('layouts.layout')
@section('content')
    <div class="container">
        <a href="{{route('module.index')}}" class="btn btn-primary w-100 mt-2">Модуль</a>
        <a href="{{route('user.index')}}" class="btn btn-primary w-100 mt-2">Штатная стуктура</a>
        <a href="{{route('test.index')}}" class="btn btn-primary w-100 mt-2">Штатная стуктура2</a>
    </div>
@endsection
