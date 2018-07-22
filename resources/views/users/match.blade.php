<body id="profile-blade">
@extends('layouts.app')
@section('content')

<p class="profile-title">Match list</p>

 <div class="match-left">
         <div class = "profie-image">
         <img src={{ secure_asset('Zak.jpg') }}>
         </div>
        
         <p class="user-name"><br>{{$user->name}} / F / 22</p>
 </div>

  <div class="match-center">
    <div class="match-movies">  
      <img src="https://image.tmdb.org/t/p/w500{{$image}}">
    </div>
  </div>  
  
  <div class="match-right">    
    @if($matches != null)
    <br><br>
     @foreach($matches as $match)
       <br>
       <p>{{$match->name}}</p>
       <br>
     @endforeach
    @else
     <br><br><br><br><br>
     <p>Sorry....<br>You don't have any match</p>
    @endif
    
  </div>

@endsection('content')
</body>