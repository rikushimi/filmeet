<body id="eiga-ichiran">
@extends('layouts.app')

@section('content')

 <div class = "eiga-title">
     <p class="eiga-title-mein">{{$title}}</p><br>
     <p class="eiga-title-tag">{{$tag}}</p>
 </div>
 
 
 <div id ="left">
         <div class = "eiga-image">
         <img src="https://image.tmdb.org/t/p/w500{{$poster}}">
         </div>
 </div>

 <div id="right">
        <div class = "eiga-kan"> 
                <p class ="eiga-overview"> 
                    {{$overview}}<br>
                    {{$release}}
                </p>
        
                @if(Auth::user()->is_wanting($code))
        
                <div class ="watchlist"> 
                  <p class="watchlist-p1">List of people who wanna watch it</p>
                </div>
                
                <div class ="want_users">
                    @foreach ($want_users as $user)
                      <ul>
                        <li><a href="{{ url('profile'). $user->id}}">{{$user->name}}</a></li>
                        <li>@include('button.follow_button',['code'=>$code,'user' => $user])</li>
                      </ul>
                    @endforeach
                </div>
          
                @endif 
        </div>
 </div>
 
  @include('button.want_button',['code'=>$code])
  @endsection
</body>