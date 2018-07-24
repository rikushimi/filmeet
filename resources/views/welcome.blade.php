<body id="main">
    

@extends('layouts.app')


@section('content')

    @if (Auth::check())
    <div class="authwelcome">
        <?php $user = Auth::user(); ?>
        <ul>
        <li class="enjoyfilmeet">Lets</li>
        <li class="enjoyfilmeet">get</li>
        <li class="enjoyfilmeet">it</li>
        <li class="enjoyfilmeet">started !</li>
        </ul>

        <p>
            <a class="toshowbalde" href="#gray" > <span class="glyphicon glyphicon-glyphicon glyphicon-heart"></span></a>
        </p>
        
     </div>
     
   
    <div id="gray">
　　</div>
　　<div id="green">
　　    <div class="explanation">
         <div class="explanation1">
            <p> Welcome to filmeet !</p> 
         </div>     
             <div class="explanation2">
              <p>    
                <p class=e2-1>
                 Select movies you wanna watch and Find people you like.<br></p>
                <p class=e2-2>
                 Don't be shy!<br></p>
                <p class=e2-3>
                 Filmeets give you best matches!<br><br></p>
                <p class=e2-4>
                 First, fill out your profile to find your best movie buddies.<br></p>
                 <a href="{{route('profile.get',Auth::user()->id)}}" class="prof">☛ PROFILE ☚</a><br><br>
                <p class=e2-5>
                 Or you can check Movie List!<br></p>
                 <a href="{{url('show')}}" class="npm">☛ Now Playing Movies ☚</a><br>
               </p>
            </div>    
    </div>   

    </div>
    @else
    <div class="center">
        <div class="text-center">
                 <h1 class="title">Filmeet</h1>
                 <h2>Wanna find your best movie buddy?</h2>
                    <div class="button1">    
                        {!! link_to_route('signup.get', 'Sign up now!', null) !!}
                    </div>
                    <div class="button1">
                        {!! link_to_route('login', 'Log in', null) !!}
                    </div>
        </div>
    </div>
    </div>
    
    @endif
@endsection

</body>