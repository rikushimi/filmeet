@extends('layouts.app')



@section('content')

 <!--The Greatest Showman-->
 
 <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{$image}} ">
     {{$title}}
     <br><br><br><br>
 </div>

   <div class="form-group">
    {!! Form::label('theater', '映画館') !!}
    {!! Form::select('theater', ['----','渋谷TOHO', '新宿TOHO', '六本木TOHO']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('time', '上映時刻') !!}
    {!! Form::select('time', ['----','10:00', '12:00', '15:00','18:00']) !!}
   </div>
   <div class="text-right">
     @if (Auth::user()->is_wanting($movie->code))
      {!! Form::open(['route' => 'movie_user.dont_want', 'method' => 'delete']) !!}
      {!! Form::hidden('code',  $movie->code) !!}
      {!! Form::submit('見たくない', ['class' => 'btn btn-success']) !!}
      {!! Form::close() !!}
     @else
      {!! Form::open(['route' => 'movie_user.want']) !!}
      {!! Form::hidden('code', $movie->code) !!}
      {!! Form::submit('見たい', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
     @endif
   </div>


@endsection
