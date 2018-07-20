@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('cancel', ['id' => "unfollowbutton"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('Shall we watch? ✔ ', ['id' => "followbutton"]) !!}
        {!! Form::close() !!}
    @endif
@endif