@if (count($users) > 0)
<ul class="media-list">

    
@foreach ($friends as $user)
    <li class="media">
        <div class="media-body">
            <div>
                {!! link_to_route('profile.get', $user->name, ['id' => $user->id]) !!}    
                {{$user->moviename}}
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif