@extends('layouts.app')



@section('content')
 
 <!--Spiderman-->
 
 <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{ $image4}} ">
     {{$title4}}
     @include('button.want_button',['movie'=>$movie])
     <br><br><br><br><br><br>
 </div>
 
<div class ="theater"> 
  {!! link_to_route('time4.get','渋谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time4.get','新宿TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time4.get','新宿ピカデリー') !!}
  <br><br>
  {!! link_to_route('time4.get','日比谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time4.get','六本木TOHOシネマズ') !!}
 </div>

@endsection