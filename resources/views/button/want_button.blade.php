<div class="watch">

@if (Auth::user()->is_wanting($code))
    {!! Form::open(['route' => 'movie_user.dont_want', 'method' => 'delete']) !!}
        {!! Form::hidden('code',  $code) !!}
        {!! Form::submit('Do not watch it',['id' => "unwant-button"])!!}
    {!! Form::close() !!}
</div>
<div class="watch2">
@else
    {!! Form::open(['route' => 'movie_user.want']) !!}
        {!! Form::hidden('code', $code) !!}
        {!! Form::submit('Watch it!', ['id' => "want-button"]) !!}
    {!! Form::close() !!}



@endif


</div>