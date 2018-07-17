<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>

 <div id ="left">
         <div class = "profie-image">
         <img src="Zak.jpg">
         </div>
        
         <p class="user-name"><br>{{$user->name}}</p>
 </div>


 <div id="right">
        <div class="comment">
            <p class="comment1">Favorite Movies </p>
               <p class="comment1-text">the greatest showman</p><br><br><br>
            <p class="comment2">Comment </p>
               <p class="comment2-text">I like movie very much! Shall we go to theater?</p>
        </div>
        
        <div id="menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">I like</a></li>
          <li><a href="#">Request</a></li>
          <li><a href="#">FavoriteMovie</a></li>
          <li><a href="#">chat</a></li>
        </div>
 </div>


@endsection
</body>
