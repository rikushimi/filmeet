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

<<<<<<< HEAD
<div class = "eiga-kan"> 
 <p class ="eiga-overview"> 
    {{$overview}}<br>
    {{$release}}
 </p>
=======
 <div class ="eiga-kan"> 
 <p class="eiga-overview">{{$overview}}<br>
 {{$release}}</p>
 </div>
 

 @include('button.want_button',['code'=>$code])
>>>>>>> 4cc3535c1f18d0b6acd1995ebde656a517a772a6
 
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
