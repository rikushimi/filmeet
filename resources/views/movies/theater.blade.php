 <body id="eiga-ichiran">
@extends('layouts.app')



@section('content')


 <div class = "eiga-title">
     <p class="eiga-title-mein">{{$title}}</p><br>
     <p class="eiga-title-tag">{{$tag}}</p>
 </div>
 
 <div class = "eiga-image">
 <img src="https://image.tmdb.org/t/p/w500{{$poster}}">
 </div>
 

 <div class ="eiga-kan"> 
 <p class="eiga-overview">{{$overview}}<br>
 {{$release}}</p>
 </div>
 

 @include('button.want_button',['code'=>$code])
 
 
@endsection
 </body>
