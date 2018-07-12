
<body id="showpage">
@extends('layouts.app')
@section('content')
             <div class="movie-box clearfix">
                <div class="col-md-3 col-sm-4 col-xs-12">
                     @foreach($movies as $movie)
                        
                        <a href="{{ action('TheaterController@show') }}"><img src="https://image.tmdb.org/t/p/w500{{$movie->getPoster()}} " class="movie-box-image"><br>
                     
                     @endforeach
                 </div>
            </div>
            
@endsection

