@extends('layouts.layout')
<ul class="list-unstyled">
    @foreach ($users_struct as $user_struct)
        @include('user.tree', ['user_struct' => $user_struct])
    @endforeach
</ul>
