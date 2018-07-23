@if (Auth::id() == $user->id)
<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>

 <div class ="left">
         <div class = "profie-image">
         <img src={{ secure_asset('Zak.jpg') }}>
         </div>
        
         <p class="user-name"><br>{{$user->name}} / F / 22</p>
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
          <li role="presentation" class="{{ Request::is('users/*/chats') ? 'active' : '' }}"><a href="{{ route('chats.get', ['id' => $user->id]) }}">Chats<span class="badge"></a></li>
           @include('chats.index', ['chats' => $chats])
        </div>
        

 </div>


@endsection
</body>
@endif