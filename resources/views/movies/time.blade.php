<body id="time-blade">
@extends('layouts.app')


@section('content')
 <div class = "movie">
{{$title}}<br> <img src="https://image.tmdb.org/t/p/w500{{$image}}">
</div>

<div class="panel-body">
  
  <p>見たいよボタン押してる人一覧</p>
 
   <div class=want_users>
     @foreach ($want_users as $user)
      <ul>
        <li><a href="{{ url('profile'). $user->id}}">{{$user->name}}</a></li>
      </ul>
     @endforeach
   </div>
</div>
@endsection

