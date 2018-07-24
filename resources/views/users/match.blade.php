<body id="profile-blade">
@extends('layouts.app')
@section('content')

<p class="profile-title">Match list</p>


         
        <div class="right">
         <div class="menu">
          <li><a href="{{route('profile.get',  ['id' => $user->id]) }}">Profile</a></li>
          @if (Auth::id() == $user->id)
          <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Sent Requests<span class="badge"></span></a></li>
          @endif
          @if (Auth::id() == $user->id)
          <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Recieved Requests<span class="badge"></span></a></li>
          @endif

          <li role="presentation" class="{{ Request::is('users/*/mymovies') ? 'active' : '' }}"><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">My Movies/Matches<span class="badge"></a></li>
          <li><a href="#">chat</a></li>
    　　　　 </div>
   　　　　　</div>
     
  <div class="match-center">
    <div class="match-movies">  
      <img src="https://image.tmdb.org/t/p/w500{{$image}}">
    </div>
  </div>  
  
  <div class="right">    
    @if($matches != null)
    <br><br>
     @foreach($matches as $match)
       <br>
       <p>{{$match->name}}</p>
       <br>
     @endforeach
    @else
     
     <p>Sorry....<br>You don't have any match</p>
     
    @endif
    
  </div>

@endsection('content')
</body>