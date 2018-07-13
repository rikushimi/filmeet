@if (Auth::user()->is_wanting($code))
    {!! Form::open(['route' => 'movie_user.dont_want', 'method' => 'delete']) !!}
        {!! Form::hidden('code',  $code) !!}
        {!! Form::submit('( ；∀；)', ['id' => 'wantButton' ]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'movie_user.want']) !!}
        {!! Form::hidden('code', $code) !!}
        {!! Form::submit('(⋈◍＞◡＜◍)。✧♡', ['id' => 'unwantButton']) !!}
    {!! Form::close() !!}
@endif
