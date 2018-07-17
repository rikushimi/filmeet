<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>

 <div class = "profie-image">
 <img src="Zak.jpg">
 </div>

<p class="user-name"><br>{{$user->name}}</p>

<div class="comment">
    <p class="comment1">Favorite Movies </p>
       <p class="comment1-text">the greatest showman</p><br><br><br>
    <p class="comment2">Comment </p>
       <p class="comment2-text">I like movie very much! Shall we go to theater?</p>
</div>

@endsection
</body>