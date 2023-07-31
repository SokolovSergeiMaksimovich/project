@extends('layouts.layout')
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

</style>
<div class="container-fluid mt-3">
    <ul class="tree">
        @foreach($users_struct as $user_struct)
            <li class="collapsed">
                <span class="">
                    {{ $user_struct->fio }} <br>
                </span>
                @include('user.tree', ['users_struct' => $user_struct->children])
            </li>
        @endforeach
    </ul>
</div>


