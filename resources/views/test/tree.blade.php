@if($users_struct)
    <ul>
        @foreach($users_struct as $user_struct)


                @if($user_struct->is_department == 1)
                <li>
                    <span>
                       {{ $user_struct->is_department}}
                        {{ $user_struct->position }}
                    </span>
                </li>
                @endif
                @if(count($user_struct->children))
                    @include('test.tree', ['users_struct' => $user_struct->children])
                @endif

        @endforeach
    </ul>
@endif
