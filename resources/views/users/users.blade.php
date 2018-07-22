@if (count($users) > 0)
<ul class="media-list">

    
@foreach ($friends as $user)
    <li class="media">
        <div class="media-body">
                {{$user->moviename}}
                <a href="{{url('profile'.$user->id)}}">{{$user->name}}</a>
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif