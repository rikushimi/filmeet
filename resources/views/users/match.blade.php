<body id="profile-blade">
@extends('layouts.app')
@section('content')

<p class="profile-title">Match list</p>
      <div class="left">
     </div>

         
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
   　　　　　
   　　　　　
   　　　
       
 <div class="whole">
     
    <div class="matchimage">  
      <img src="https://image.tmdb.org/t/p/w500{{$image}}">
    </div>


    @if($matches != null)
    
  <div class="peoplewatch1">  
   <p>Let's start to chat with matched people and go to see the movie!</p>
     @foreach($matches as $match)

       <br>
       <div class="matched-ppl">
           <a href="{{url('profile'.$user->id)}}">{{$match->name}}</a>
       </div>
       <div class="matched-chat">
           <a href="{{url('chats'.$match->id)}}" class="chatbtn">Chat</a>
       </div>
       <br>

     @endforeach
  </div>  
  
    @else
        <div class="sorry"><br><br>
          <p>Sorry....<br>You don't have any match</p>
        </div>
     </div>
    @endif
</div>    

@endsection('content')
</body>