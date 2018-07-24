<body id="eiga-ichiran">
@extends('layouts.app')

@section('content')

 <div class = "eiga-title">
     <p class="eiga-title-mein">{{$title}}</p><br>
     <p class="eiga-title-tag">{{$tag}}</p>
 </div>
 
 

 <div class ="left-the">
         <div class = "eiga-image">
         <img src="https://image.tmdb.org/t/p/w500{{$poster}}">
         </div>
 </div>


 <div class="right-the">

 @include('button.want_button',['code'=>$code])
 @if(Auth::user()->is_wanting($code))
   <div class ="watchlist"> 
     <p class="watchlist-p1">List of people who wanna watch it</p>
     <p class="watchlist-p2">Click their name below to see their profiles and send them requests.</p>
   </div>
        
   <div class ="want_users">
    <ul>
      @foreach ($want_users as $user)
      <li class="username clearfix">
        <a href="{{ url('profile'). $user->id}}">{{$user->name}}</a>
        @include('button.follow_button',['code'=>$code,'user' => $user])
      </li>
       @endforeach
    </ul>
   </div> 
 @else
 
    <p class ="eiga-overview"> 
      {{$overview}}<br>
      {{$release}}
    </p>
 @endif 

 </div>
     @endsection
 
</body>
 
  
