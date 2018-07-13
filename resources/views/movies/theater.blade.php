 <body id="eiga-ichiran">
@extends('layouts.app')

@section('content')

 <div class = "eiga-title">
     <p1>{{$title}}</p1><br>
     <p2>{{$tag}}</p2>
 </div>
 
 <div class = "eiga-image">
 <img src="https://image.tmdb.org/t/p/w500{{$poster}}">
 </div>
 
 
 

 <div class ="eiga-kan"> 
 <p1>{{$overview}}</p><br>
 {{$release}}</p>
 </div>
 

 @include('button.want_button',['code'=>$code])
 
 
@endsection
 </body>

