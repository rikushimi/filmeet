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

<div class = "eiga-kan"> 
 <p class ="eiga-overview"> 
    {{$overview}}<br>
    {{$release}}
 </p>
 
@if(Auth::user()->is_wanting($code))
  
  <div class ="want_users">
    @foreach ($want_users as $user)
      <ul>
        <li><a href="{{ url('profile'). $user->id}}">{{$user->name}}</a></li>
      </ul>
      @include('button.follow_button',['code'=>$code,'user' => $user])
    @endforeach
  </div>
  
@endif 
 </div>
 
  @include('button.want_button',['code'=>$code])
  @endsection
</body>
