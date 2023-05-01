@extends('layouts.layout')
@section('content')
    <div class="row gy-2">
        <div class="col-12">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('module.index')}}">Назад</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <label>ОШИБКА!</label> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('module.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Наименование модуля</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Наименование модуля">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Иконка</label>
                        <input type="text" name="icon" value="{{old('icon')}}" class="form-control" placeholder="Иконка">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Ссылка</label>
                        <input type="text" name="link" value="{{old('link')}}" class="form-control" placeholder="Ссылка">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>Функция:</label>
                        <input type="text" name="function" value="{{old('function')}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>Название контролера:</label>
                        <input type="text" name="controller_name" value="{{old('controller_name')}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>type handler:</label>
                        <input type="text" name="type_handler" value="{{old('type_handler')}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>Номер сортировки:</label>
                        <input type="text" name="sort_field" value="{{old('sort_field')}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Код организации</label>
                        <input type="text" name="organization_id" class="form-control" placeholder="Код организации">
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </div>
        </form>
    </div>
@endsection
