@if($users_struct)
    <ul class="mt-3">
        @foreach($users_struct as $user_struct)


                @if($user_struct->is_department == 1)
                <li>
                    <div class="p-1 border-dark border border-1 rounded-1 d-inline">
                        <span>
                            {{ $user_struct->position }}
                        </span>
                    </div>
                    <a type="button" class="btn btn-info" href="{{route('test.show',$user_struct)}}">+</a>
                </li>
                @endif
                @if(count($user_struct->children))
                    @include('test.tree', ['users_struct' => $user_struct->children])
                @endif

        @endforeach
    </ul>
@endif
