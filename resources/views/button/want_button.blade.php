<div class="watch">

@if (Auth::user()->is_wanting($code))
    {!! Form::open(['route' => 'movie_user.dont_want', 'method' => 'delete', 'class' => 'want-button']) !!}
        {!! Form::hidden('code',  $code) !!}

        {!! Form::submit('remove')!!}
    {!! Form::close() !!}
</div>
<div class="watch2">
@else
    {!! Form::open(['route' => 'movie_user.want','class' => 'want-button']) !!}
        {!! Form::hidden('code', $code) !!}
        {!! Form::submit('Watch it!') !!}
    {!! Form::close() !!}



@endif


</div>