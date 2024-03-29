@extends('layouts.layout')

@section('content')
    <style>
        .tree, .tree ul, .tree li {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .tree {
            margin: 0 0 1em;
            text-align: center;
        }
        .tree, .tree ul {
            display: table;
        }
        .tree ul {
            width: 100%;
        }
        .tree li {
            display: table-cell;
            padding: .5em 0;
            vertical-align: top;
        }
        .tree li:before {
            outline: solid 1px #666;
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
        .tree li:first-child:before {left: 50%;}
        .tree li:last-child:before {right: 50%;}

        .tree span {
            border: solid .1em #666;
            border-radius: .2em;
            display: inline-block;
            margin: 0 .2em .5em;
            padding: .2em .5em;
            position: relative;
            white-space: nowrap;
        }

        /* | */
        .tree ul:before,
        .tree span:before {
            outline: solid 1px #666;
            content: "";
            height: .5em;
            left: 50%;
            position: absolute;
        }
        .tree ul:before {
            top: -.5em;
        }
        .tree span:before {
            top: -.55em;
        }

        /* The root node doesn't connect upwards */
        .tree > li {margin-top: 0;}
        .tree > ul:before{
            outline: none;
        }
        .tree_container{
            max-height: 600px;
        }
    </style>
    <div class="col-12 mt-3 overflow-auto tree_container">
        <ul class="tree">
            @foreach($users_struct as $user_struct)
                <li >
                    <span class="">
                        {{ $user_struct->fio }} <br>
                        {{ $user_struct->position }}
                    </span>
                    @if(count($user_struct->children))
                        @include('user.tree', ['users_struct' => $user_struct->children])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection

