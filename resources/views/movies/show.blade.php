@extends('layouts.app')
@section('content')
             <div class="movie-box clearfix">
                <div class="col-md-3 col-sm-4 col-xs-12">
                         <img src="https://image.tmdb.org/t/p/w500{{ $image}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{{ $title }}</span>
                         </p>
                </div>
              
                <div class="col-md-3 col-sm-4 col-xs-12">
                         <img src="https://image.tmdb.org/t/p/w500{{ $image1}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{{ $title1}}</span>
                         </p>
                </div> 
              
                <div class="col-md-3 col-sm-4 col-xs-12">
                         <img src="https://image.tmdb.org/t/p/w500{{ $image2}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{{ $title2 }}</span>
                         </p>
                </div> 
              
                <div class="col-md-3 col-sm-4 col-xs-12">
                         <img src="https://image.tmdb.org/t/p/w500{{ $image3}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{{ $title3 }}</span>
                         </p>
                </div> 
              
                <div class="col-md-3 col-sm-4 col-xs-12">
                         <img src="https://image.tmdb.org/t/p/w500{{ $image4}} " class="movie-box-image">
                         <p class="movie-box-title"> <span>{{ $title4 }}</span>
                         </p>
                </div> 
                
            </div>
              
              
@endsection