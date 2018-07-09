@extends('layouts.app')



@section('content')
 
 <!--Kingsman-->
 
 <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{ $image2}} ">
     {{$title2}}
     <br><br><br><br><br><br>
 </div>
 
 <div class ="theater"> 
  {!! link_to_route('time2.get','渋谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time2.get','新宿TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time2.get','新宿ピカデリー') !!}
  <br><br>
  {!! link_to_route('time2.get','日比谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time2.get','六本木TOHOシネマズ') !!}
 </div>

@endsection