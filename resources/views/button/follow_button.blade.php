@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('てかやっぱり見たくない', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow', $user->id]]) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('共に見ましょう', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif