@extends('layouts.app')



@section('content')
 
 <!--Dead Pool-->
 
 <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{ $image1}} ">
     {{$title1}}
     <br><br><br><br><br><br>
 </div>
 
 <div class ="theater"> 
  {!! link_to_route('time1.get','渋谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time1.get','新宿TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time1.get','新宿ピカデリー') !!}
  <br><br>
  {!! link_to_route('time1.get','日比谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time1.get','六本木TOHOシネマズ') !!}
 </div>

@endsection