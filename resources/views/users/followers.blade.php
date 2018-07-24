@if (Auth::id() == $user->id)
<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>

 <div class ="left">
         <div class = "profie-image">
         <img src={{ secure_asset('none.jpg') }}>
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
              <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Sent Requests<span class="badge">{{ $count_followings }}</span></a></li>
              <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Recieved Requests<span class="badge">{{ $count_followers }}</span></a></li>
              <li role="presentation" class="{{ Request::is('users/*/mymovies') ? 'active' : '' }}"><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">My Movies/Matches<span class="badge"></a></li>
          @endif
        </div>
        @include('users.users', ['users' => $users])
 </div>


@endsection
</body>
@endif

