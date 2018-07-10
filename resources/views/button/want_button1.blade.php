
@if (Auth::user()->is_wanting($movie->code))
    {!! Form::open(['route' => 'movie_user.dont_want', 'method' => 'delete']) !!}
        {!! Form::hidden('movieCode',  $movie->code) !!}
        {!! Form::submit('( ；∀；)', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
 
    {!! Form::open(['route' => 'movie_user.want']) !!}
        {!! Form::hidden('movieCode', $movie->code) !!}
        {!! Form::submit('(⋈◍＞◡＜◍)。✧♡', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif