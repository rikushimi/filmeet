<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
  <p class="profile-title">My Movies</p>

  <div class ="left">
   <div class = "profie-image">
    <img src={{ secure_asset('Zak.jpg') }}>
   </div>

    <p class="user-name">{{$user->name}}</p><br>
    <p class="user-age">AGE
    <span class="user-detail">{{$user->age}}</span></p><br>
    <p class="user-sex">SEX
    <span class="user-detail">{{$user->sex}}</span></p>
  </div>

  <div class="right">

   <div class="menu">
    <li><a href="{{route('profile.get',  ['id' => $user->id]) }}">Profile</a></li>
     @if (Auth::id() == $user->id)
      <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Like<span class="badge">{{ $count_followings }}</span></a></li>
      <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Liked<span class="badge">{{ $count_followers }}</span></a></li>
      <li role="presentation" class="{{ Request::is('users/*/mymovies') ? 'active' : '' }}"><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">My Movies<span class="badge"></a></li>
     @endif
   </div>
  </div>
@include('users.movies', ['movies' => $movies])

@endsection
</body>
