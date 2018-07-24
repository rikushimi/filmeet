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
     
    <!-- <div class="explanation">-->
    <!--     <div class="explanation1">-->
    <!--        <p> welcome to filmeet</p> -->
    <!--     </div>     -->
    <!--         <div class="explanation2">-->
    <!--             <p>-->
    <!--                 Select movies you wanna watch and Find people you like.<br>-->
    <!--                 Don't be shy!<br>-->
    <!--                 Filmeets give you best matches!<br>-->
    <!--                 First, fill out your profile to find your best movie buddies.<br>-->
    <!--                 <a href="{{route('profile.get',Auth::user()->id)}}">Profile</a>-->
    <!--             </p> -->
    <!--        </div>    -->
    <!--</div>   -->
    <div id="gray">
　　</div>
　　<div id="green">
　　    <div class="explanation">
         <div class="explanation1">
            <p> Welcome to filmeet !</p> 
         </div>     
             <div class="explanation2">
                 <p>

                     Select movies you wanna watch and Find people you like.<br>
                     Don't be shy!<br>
                     Filmeets give you best matches!<br><br>
                     First, fill out your profile to find your best movie buddies.<br>
                     <a href="{{route('profile.get',Auth::user()->id)}}">- Profile -</a><br><br>
                     Or you can see Movie List right now!<br>
                     <a href="{{url('show')}}">- Now Playing Movies -</a>
                 </p> 

            </div>    
    </div>   
	<a href="#" class="abtn">
		<div class="close"></div>
	</a>
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