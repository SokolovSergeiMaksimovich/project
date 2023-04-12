@extends('module.layout')

@section('content')
    <div class="row gy-2">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Изменить модель</h2>
            </div>
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

        <form action="{{route('module.update',$module->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Наименование модуля:</label>
                        <input type="text" name="name" value="{{$module->name}}" class="form-control" placeholder="Наименование модуля">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Иконка:</label>
                        <input type="text" name="icon" value="{{$module->icon}}" class="form-control" placeholder="иконка">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Ссылка:</label>
                        <input type="text" name="link" value="{{$module->link}}" class="form-control" placeholder="ссылка">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>Функция:</label>
                        <input type="text" name="function" value="{{$module->function}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>type handler:</label>
                        <input type="text" name="type_handler" value="{{$module->type_handler}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>Название контролера:</label>
                        <input type="text" name="controller_name" value="{{$module->controller_name}}" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="fs-5">
                        <label>Номер сортировки:</label>
                        <input type="text" name="sort_field" value="{{$module->sort_field}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>код организации:</label>
                    <input type="text" name="organization_id" value="{{$module->organization_id}}" class="form-control" placeholder="код организации">
                </div>
            </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Изменить</button>
                </div>
        </form>
    </div>
@endsection
