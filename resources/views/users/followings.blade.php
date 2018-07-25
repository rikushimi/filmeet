@if(Auth::id() == $user->id)


<body id="profile-blade">
@extends('layouts.app')
@section('content')

 <p class="profile-title">Profile</p>

 <div class ="left">
 </div>


 <div class="right">
   
         <div class="menu">
           <li><a href="{{route('profile.get',  ['id' => $user->id]) }}">Profile</a></li>
          @if (Auth::id() == $user->id)
              <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Sent Requests<span class="badge">{{ $count_followings }}</span></a></li>
              <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Recieved Requests<span class="badge">{{ $count_followers }}</span></a></li>
              <li role="presentation" class="{{ Request::is('users/*/mymovies') ? 'active' : '' }}"><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">Match List&nbsp;<span class="glyphicon glyphicon-heart"></span>&nbsp;<span class="badge">{{ $count_match}}</span></a></li>
          @endif
        </div>
        @include('users.users', ['users' => $users])

 </div>


@endsection
</body>
@endif