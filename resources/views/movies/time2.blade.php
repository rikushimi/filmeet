@extends('layouts.app')


@section('content')
 
  <!--Kingsman-->
 
  <div class = "movie">
     <img src="https://image.tmdb.org/t/p/w500{{ $image2}} ">
     {{$title2}}
     <br><br><br><br><br><br>
 </div>
 
 <div class ="data">
    7/27
 </div>    
 
 <div class ="time"> 
  {!! link_to_route('time2.get','9:00~') !!}
  <br>
  {!! link_to_route('time2.get','12:00~') !!}
  <br>
  {!! link_to_route('time2.get','16:00~') !!}
  <br>
  {!! link_to_route('time2.get','20:00~') !!}
  <br><br>
 </div>
 
 <div class ="data">
    7/28
 </div>    
 
 <div class ="time"> 
  {!! link_to_route('time2.get','8:00~') !!}
  <br>
  {!! link_to_route('time2.get','11:00~') !!}
  <br>
  {!! link_to_route('time2.get','15:00~') !!}
  <br>
  {!! link_to_route('time2.get','19:00~') !!}
  <br><br>
 </div>
 
 <div class ="data">
    7/29
 </div>    
 
 <div class ="time"> 
  {!! link_to_route('time2.get','10:00~') !!}
  <br>
  {!! link_to_route('time2.get','14:00~') !!}
  <br>
  {!! link_to_route('time2.get','18:00~') !!}
  <br>
  {!! link_to_route('time2.get','22:00~') !!}
  <br><br>
 </div>

@endsection
