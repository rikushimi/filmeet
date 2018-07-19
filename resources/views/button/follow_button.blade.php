@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('てかやっぱり見たくない', ['id' => "followbutton"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('共に見ましょう', ['id' => "followbutton"]) !!}
        {!! Form::close() !!}
    @endif
@endif