<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>

 <div class="left">
         <div class = "profie-image">
     @if($url != null)        
        <img src="{{$url}}" alt="">
     @else    
        <img src="{{ secure_asset('profile.png') }}" alt=""> 
     @endif    
 </div>
         <p class="user-name">{{$user->name}}</p><br>
         <p class="user-age">AGE
            <span class="user-detail">{{$user->age}}</span></p><br>
         <p class="user-sex">SEX
            <span class="user-detail">{{$user->sex}}</span></p>
 </div>

 <div class="right">
          
     <div class="menu">
          <li class="active"><a href="{{route('profile.get',  ['id' => $user->id]) }}">Profile</a></li>
          @if (Auth::id() == $user->id)

          <li role="presentation" ><a href="{{ route('users.followings', ['id' => $user->id]) }}">Sent Requests<span class="badge">{{ $count_followings }}</span></a></li>
          <li role="presentation" ><a href="{{ route('users.followers', ['id' => $user->id]) }}">Recieved Requests<span class="badge">{{ $count_followers }}</span></a></li>
          <li role="presentation" ><a href="{{ route('mymovies.get', ['id' => $user->id]) }}">My Movies/Matches<span class="badge"></a></li>

          @endif
     </div>

          
    <div class="comment">
        <p class="comment1">Favorite Movies </p>
        <p class="comment1-text">{!! nl2br(e( $user->favmovie )) !!}</p><br><br><br>
        <p class="comment2">Comment</p>
        <p class="comment2-text">{!! nl2br(e( $user->comment )) !!}</p>
        
    </div>
        <div class="p-center">
        @if (Auth::id() == $user->id)
            <div class="edit_button">
              <a href="{{route('profile.edit',  ['id' => $user->id])}}">edit</a>
            </div>
        @endif
        <div class="movie-link">
            <p>
            <span class="glyphicon glyphicon-chevron-right"></span>
            
            <a href="{{route('show.get')}}">Now Playwing Movies</a>
            
            </p>
        </div>
 </div>


@endsection
</body>