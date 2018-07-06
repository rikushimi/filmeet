@extends('layouts.app')
@include('commons.navbar')
@section('content')
              <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {{ $title }}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image}} ">    
                </div>
              </div>
              
              <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {{ $title1 }}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image1}} ">    
                </div>
              </div>
              
               <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {{ $title2 }}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image2}} ">    
                </div>
              </div>
              
               <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {{ $title3 }}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image3}} ">    
                </div>
              </div>
              
               <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {{ $title4 }}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image4}} ">    
                </div>
              </div>
@endsection