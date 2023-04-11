@extends('module.layout')

@section('content')
    <div class="row gy-2">
        <div class="col-12 ">
            <div>
                <a class="btn btn-success" href="{{route('module.create')}}">Создать</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Иконка</th>
                <th>Ссылка</th>
                <th>Номер организации</th>
            </tr>
            @foreach ($modules as $module)
                <tr>
                    <td>{{$module->id}}</td>
                    <td>{{$module->name}}</td>
                    <td>{{$module->icon}}</td>
                    <td>{{$module->link}}</td>
                    <td>{{$module->organization_id}}</td>
                    <td>
                        <form action="{{route('module.destroy',$module)}}" method="POST">
                            <a type="button" class="btn btn-info" href="{{route('module.show',$module)}}">Показать</a>
                            <a class="btn btn-primary" href="{{route('module.edit',$module)}}">Обновить</a>
                            @csrf

                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
