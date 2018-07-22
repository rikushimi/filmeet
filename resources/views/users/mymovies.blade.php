<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">My Movies</p>

 <div class ="left">
         <div class = "profie-image">
         <img src={{ secure_asset('Zak.jpg') }}>
         </div>
        
         <p class="user-name"><br>{{$user->name}} /age: {{$user->age}}  / {{$user->sex}} </p>
 </div>

 <div class="right">
       
 <div class="menu">
           <li><a href="{{route('profile.get',  ['id' => $user->id]) }}">Profile</a></li>
          @if (Auth::id() == $user->id)
              <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Like<span class="badge">{{ $count_followings }}</span></a></li>
          @endif
          @if (Auth::id() == $user->id)
              <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Liked<span class="badge">{{ $count_followers }}</span></a></li>
          @endif
           <li role="presentation" class="{{ Request::is('users/*/mymovies') ? 'active' : '' }}"><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">My Movies<span class="badge"></a></li>
          <li><a href="#">chat</a></li>
        </div>
 </div>
         @include('users.movies', ['movies' => $movies])

@endsection
</body>
