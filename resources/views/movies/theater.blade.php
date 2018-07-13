 <body id="eiga-ichiran">
@extends('layouts.app')

@section('content')

 <div class = "watchlist">
     <p class=P1>{{$title}}</p><br>
     <p class=p2>{{$tag}}</p>
 </div>
 
 <div class = "eiga-image">
 <img src="https://image.tmdb.org/t/p/w500{{$poster}}">
 </div>
 
 
 

 <div class ="eiga-kan"> 
 <p class="p1">{{$overview}}<br>
 {{$release}}</p>
 </div>
 

 @include('button.want_button',['code'=>$code])
 
 
@endsection
 </body>

