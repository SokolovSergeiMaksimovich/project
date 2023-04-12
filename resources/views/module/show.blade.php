@extends('module.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div>
                <a class="btn btn-primary" href="{{route('module.index')}}">Назад</a>
            </div>
        </div>
    </div>

    <div class="row gy-3">
        <div class="col-12">
            <div class="fs-5">
                <label>Название:</label>
                <span class="text-info border border-1 border-dark border-opacity-50 px-3">{{$module->name}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>Иконка:</label>
                <span class="text-success border border-1 border-dark border-opacity-50 px-3">{{$module->icon}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>Сcылка:</label>
                <span class="text-warning border border-1 border-dark border-opacity-50 px-3">{{$module->link}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>Функция:</label>
                <span class="text-primary border border-1 border-dark border-opacity-50 px-3">{{$module->function}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>type handler:</label>
                <span class="text-primary border border-1 border-dark border-opacity-50 px-3">{{$module->type_handler}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>Название контролера:</label>
                <span class="text-primary border border-1 border-dark border-opacity-50 px-3">{{$module->controller_name}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>Номер сортировки:</label>
                <span class="text-primary border border-1 border-dark border-opacity-50 px-3">{{$module->sort_field}}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="fs-5">
                <label>Код организации:</label>
                <span class="text-primary border border-1 border-dark border-opacity-50 px-3">{{$module->organization_id}}</span>
            </div>
        </div>
    </div>
@endsection
