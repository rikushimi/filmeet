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
 {{$overview}}<br>
 {{$release}}
 
 @if(Auth::user()->is_wanting($code))
 <div class ="want_users">
   @foreach ($want_users as $user)
      <ul>
        <li><a href="{{ url('profile'). $user->id}}">{{$user->name}}</a>
        </li>
      </ul>
       @include('button.follow_button',['code'=>$code,'user' => $user])
          
   @endforeach
 </div>
@endif 
 </div>
 

@endsection
 </body>
