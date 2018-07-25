<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
  <p class="profile-title">My Movies</p>
　
　<div class="left">
　</div>
　
  <div class="right">

   <div class="menu">
    <li><a href="{{route('profile.get',  ['id' => $user->id]) }}">Profile</a></li>
     @if (Auth::id() == $user->id)
      <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Sent Requests<span class="badge">{{ $count_followings }}</span></a></li>
      <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Recieved Requests<span class="badge">{{ $count_followers }}</span></a></li>
      <li role="presentation" class="{{ Request::is('users/*/mymovies') ? 'active' : '' }}"><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">My Movies/Matches&nbsp;<span class="glyphicon glyphicon-heart"></a></li>
     @endif
   </div>
  </div>
@include('users.movies', ['movies' => $movies])

@endsection
</body>