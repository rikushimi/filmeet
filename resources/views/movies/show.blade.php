<body id="showpage">
@extends('layouts.app')
@section('content')
             <div class="movie-box clearfix">
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image}} " class="movie-box-image">
                          <span> {!! link_to_route('theater.get', $image) !!}</span>
                         
                </div>
              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image1}} " class="movie-box-image">
                          <span>{!! link_to_route('theater1.get', $image1) !!}</span>
                         
                </div>
              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image2}} " class="movie-box-image">
                          <span>{!! link_to_route('theater2.get', $image2) !!}</span>
                         
                 </div>
              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image3}} " class="movie-box-image">
                          <span>{!! link_to_route('theater3.get', $image3) !!}</span>
                         
                </div>

              
                <div class="col-md-3 col-sm-4 col-xs-12">

                         <img src="https://image.tmdb.org/t/p/w500{{ $image4}} " class="movie-box-image">
                          <span>{!! link_to_route('theater4.get', $image4) !!}</span>
                         
                </div>
              </div>
              



@endsection
</body>