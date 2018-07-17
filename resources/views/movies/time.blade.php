<body id="time-blade">
@extends('layouts.app')


@section('content')
 <div class = "eiga-title">
     <p class="eiga-title-mein">{{$title}}</p><br>
     <p class="eiga-title-tag">{{$tag}}</p>
 </div>

  <div class = "eiga-image">
 <img src="https://image.tmdb.org/t/p/w500{{$image}}">
 </div>



<div class ="watchlist"> 
  <p class="watchlist-p1">List of people who wanna watch it</p>
 
   <div class=want_users>
     @foreach ($want_users as $user)
       <ul>
         <li><a href="{{ url('profile'). $user->id}}">{{$user->name}}</a></li>
       </ul>
     @endforeach
   </div>
</div>
@endsection
</body>
