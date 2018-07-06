@extends('layouts.app')
@include('commons.navbar')
@section('content')
              <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {!! link_to_route('theater.get', $title) !!}</p>
                        <img src="https://image.tmdb.org/t/p/w500{{ $image}} ">    
                </div>
              </div>
              
              <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title">{!! link_to_route('theater1.get', $title1) !!}</p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image1}} ">    
                </div>
              </div>
              
               <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title">{!! link_to_route('theater2.get', $title2) !!}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image2}} ">    
                </div>
              </div>
              
               <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title">{!! link_to_route('theater3.get', $title3) !!}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image3}} ">    
                </div>
              </div>
              
               <div class="movie1">
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <p class="list-title"> {!! link_to_route('theater4.get', $title4) !!}<br></p>
                         <img src="https://image.tmdb.org/t/p/w500{{ $image4}} ">    
                </div>
              </div>
@endsection