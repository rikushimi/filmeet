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
        <li class="enjoyfilmeet">started.</li>
        </ul>
        
        <p>
            <a class="toshowbalde" href="{{url('show')}}"> <span class="glyphicon glyphicon-glyphicon glyphicon-heart"></span></a>
            
            
            
            <!--{!! link_to_route('show.get', 'start✔', null) !!}-->
        </p>
     </div>
    @else
    <div class="center">
        <div class="text-center">
                 <h1 class="title">Filmeet</h1>
                 <h2>Wanna meet new people through movies?</h2>
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