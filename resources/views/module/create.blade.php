@extends('module.layout')
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
                        <input type="text" name="name" class="form-control" placeholder="Наименование модуля">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Иконка</label>
                        <input type="text" name="icon" class="form-control" placeholder="Иконка">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Ссылка</label>
                        <input type="text" name="link" class="form-control" placeholder="Ссылка">
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
