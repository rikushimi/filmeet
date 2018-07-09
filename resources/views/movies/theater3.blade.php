@extends('layouts.app')



@section('content')
 
 <!--Star Wars-->
 
 <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{ $image3}} ">
     {{$title3}}
     <br><br><br><br><br><br>
 </div>
 
 <div class ="theater"> 
  {!! link_to_route('time3.get','渋谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time3.get','新宿TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time3.get','新宿ピカデリー') !!}
  <br><br>
  {!! link_to_route('time3.get','日比谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time3.get','六本木TOHOシネマズ') !!}
 </div>

@endsection