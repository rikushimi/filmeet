@extends('layouts.app')
@section('content')
             <div class="movie-box clearfix">
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image}} " class="movie-box-image">
                         <p class="movie-box-title"> <span> {!! link_to_route('theater.get', $title) !!}</span>
                         </p>
                </div>
              
               <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image1}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{!! link_to_route('theater1.get', $title1) !!}</span>
                         </p>
                </div>
              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image2}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{!! link_to_route('theater2.get', $title2) !!}</span>
                         </p>
                 </div>
              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image3}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{!! link_to_route('theater3.get', $title3) !!}</span>
                         </p>
                </div>

              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image4}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{!! link_to_route('theater4.get', $title4) !!}</span>
                         </p>
                </div>
              </div>
              
            <div class="panel panel-default">
                <div class="panel-heading">
                    Now Playing Movies
                </div>
                <div class="panel-body">
                    <ul>
                       @foreach($movies as $movie)
                               <li>{{$movie->getTitle()}}</li>
                                   <img src="https://image.tmdb.org/t/p/w500{{$movie->getPoster()}} " class="movie-box-image"><br>
                                   {{$movie->getOverview()}}<br>
                       @endforeach        
                    </ul>
                </div>
            </div>
            
@endsection