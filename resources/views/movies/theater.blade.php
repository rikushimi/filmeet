 <body id="eiga-ichiran">
@extends('layouts.app')



@section('content')


 <div class = "eiga-title">
     {{$title}}<br>{{$tag}}
     
 </div>
 
 
 <div class = "eiga-image">
 <img src="https://image.tmdb.org/t/p/w500{{$poster}}">
  @include('button.want_button',['code'=>$code])
 </div>
 

 <div class ="eiga-kan"> 

@endsection

 </body>
