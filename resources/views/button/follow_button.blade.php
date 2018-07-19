@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id,$code))
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete', 'class' => 'follow-button']) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('Cancel' ) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow', $user->id],  'class' => 'follow-button']) !!}
            {!! Form::hidden('code',$code) !!}
            {!! Form::hidden('id',$user->id)!!}
            {!! Form::submit('Shall we watch?') !!}
        {!! Form::close() !!}
    @endif
@endif