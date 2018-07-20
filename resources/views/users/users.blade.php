@if (count($users) > 0)
<ul class="media-list">

    
@foreach ($friends as $user)
    <li class="media">
        <div class="media-body">
            <div>
                <li><img src="https://image.tmdb.org/t/p/w500{{$user->image}}">{{$user->moviename}}</li>
                {{ $user->name}}
               {!! link_to_route('profile.get', 'View profile', ['id' => $user->id]) !!}
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif