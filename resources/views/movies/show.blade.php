@extends('layouts.app')
@section('content')
             <div class="movie-box clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="masa clearfix">
                       
                       @foreach($movies as $movie)
                                  <span>
                                    <a href="{{ route('theater.get') }}">
                                   <img src="https://image.tmdb.org/t/p/w500{{$movie->getPoster()}} " class="movie-box-image"></a><br>
                                  </span>
                       @endforeach        
                  </div>
                </div>
              </div>
              
           
               
            
@endsection