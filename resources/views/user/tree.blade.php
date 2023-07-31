@if($users_struct)
    <ul>
        @foreach($users_struct as $user_struct)
            <li>
                <span>
                    {{ $user_struct->fio }} <br>
                    {{ $user_struct->position }}
                </span>
                @if(count($user_struct->children))
                    @include('user.tree', ['users_struct' => $user_struct->children])
                @endif
            </li>
        @endforeach
    </ul>
@endif
