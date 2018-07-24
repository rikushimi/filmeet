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
    　　　　 </div>
   　　　　　</div>
   　　　　　
   　　　　　
   　　　<div class="peoplewatch">
       <p>Your matches!!</p>
       </div>　　
       
 <div class="whole">
     
    <div class="matchimage">  
      <img src="https://image.tmdb.org/t/p/w500{{$image}}">
    </div>


    @if($matches != null)
  <div class="peoplewatch1">  
     @foreach($matches as $match)

       <br>
   
       <p><a href="{{url('chats'.$match->id)}}">{{$match->name}}</a></p>
       <br>

     @endforeach
  </div>  
  
    @else
        <div class="sorry">
          <p>Sorry....<br>You don't have any match</p>
        </div>
     </div>
    @endif
</div>    

@endsection('content')
</body>