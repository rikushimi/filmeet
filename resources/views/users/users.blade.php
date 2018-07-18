@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-body">
            <div>
                {{ $user->name }}
               {!! link_to_route('profile.get', 'View profile', ['id' => $user->id]) !!}
            </div>
        </div>
    </li>
@endforeach
</ul>

@endif