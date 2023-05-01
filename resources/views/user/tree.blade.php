<li>
    <div class="d-block border border-2 border-dark">
        {{ $user_struct->fio }}
        {{ $user_struct->position }}
    </div>
    @if ($user_struct->children->count())
        <ul>
            @foreach ($user_struct->children as $child)

                    @include('user.tree', ['user_struct' => $child])

            @endforeach
        </ul>
    @endif
</li>
