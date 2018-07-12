<body id="time-blade">
@extends('layouts.app')


@section('content')
 
  <!--The Greatest Showman-->
 <div class = "eiga-title">
     {{$title}}
 </div>
 
 <div class = "eiga-image">
      <img src="https://image.tmdb.org/t/p/w500{{$image}} ">
 </div>
  
  
 <div class="timelist">
    <div class ="data">
       7/27
    </div>    
   
    <div class ="time"> 
     {!! link_to_route('time.get','9:00~') !!}
     <br>
     {!! link_to_route('time.get','12:00~') !!}
     <br>
     {!! link_to_route('time.get','16:00~') !!}
     <br>
     {!! link_to_route('time.get','20:00~') !!}
     <br><br>
    </div>
    
    <div class ="data">
       7/28
    </div>    
    
    <div class ="time"> 
     {!! link_to_route('time.get','8:00~') !!}
     <br>
     {!! link_to_route('time.get','11:00~') !!}
     <br>
     {!! link_to_route('time.get','15:00~') !!}
     <br>
     {!! link_to_route('time.get','19:00~') !!}
     <br><br>
    </div>
    
    <div class ="data">
       7/29
    </div>    
    
    <div class ="time"> 
     {!! link_to_route('time.get','10:00~') !!}
     <br>
     {!! link_to_route('time.get','14:00~') !!}
     <br>
     {!! link_to_route('time.get','18:00~') !!}
     <br>
     {!! link_to_route('time.get','22:00~') !!}
     <br><br>
    </div>
</div> 
@endsection
</body>