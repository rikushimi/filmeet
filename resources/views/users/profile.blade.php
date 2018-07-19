<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>

 <div id ="left">
         <div class = "profie-image">
         <img src={{ secure_asset('Zak.jpg') }}>
         </div>
        
         <p class="user-name"><br>{{$user->name}} / F / 22</p>
 </div>

 <div id="right">
        <div class="comment">
            <p class="comment1">Favorite Movies </p>
               <p class="comment1-text">the greatest showman</p><br><br><br>
            <p class="comment2">Comment </p>
               <p class="comment2-text">I like movie very much! Shall we go to theater?</p>
        </div>

 <div id="menu">
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
        @if (Auth::id() == $user->id)
            <div id="edit_button">
              <a href="{{route('profile.edit', Auth::id())}}">edit</a>
            </div>
        @endif
        
       
 </div>


@endsection
</body>