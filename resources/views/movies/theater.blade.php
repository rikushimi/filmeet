 <body id="eiga-ichiran">
@extends('layouts.app')



@section('content')

 <!--The Greatest Showman-->
 <div class = "eiga-title">
     {{$title}}
 </div>
 
 <div class = "eiga-image">
 <img src="https://image.tmdb.org/t/p/w500{{$image}} ">
 </div>
 

 <div class ="eiga-kan"> 
  {!! link_to_route('time.get','渋谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time.get','新宿TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time.get','新宿ピカデリー') !!}
  <br><br>
  {!! link_to_route('time.get','日比谷TOHOシネマズ') !!}
  <br><br>
  {!! link_to_route('time.get','六本木TOHOシネマズ') !!}
   @include('button.want_button',['movie'=>$movie])
  
  </div>
@endsection

 </body>
