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
        <li>{{ $user->name }}</li>
      </ul>
     @endforeach
   </div>
</div>
@endsection

