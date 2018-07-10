@extends('layouts.app')
@include('commons.navbar')


@section('content')

 <!--The Greatest Showman-->
 
 <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{ $image}} ">
     {{$title}}
     <br><br><br><br><br><br>
 </div>
 @include('button.want_button',['movie'=>$movie])
 <div class ="theater"> 
  {!! link_to_route('time.get','渋谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time.get','新宿TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time.get','新宿ピカデリー') !!}
  <br><br>
  {!! link_to_route('time.get','日比谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time.get','六本木TOHOシネマズ') !!}
 </div>

@endsection
