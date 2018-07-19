<body id="main">

@extends('layouts.app')


@section('content')
    @if (Auth::check())
        <div class="authwelcome">
        <?php $user = Auth::user(); ?>
        <p class=enjoyfilmeet>
            {!! link_to_route('show.get', 'Lets find your favorite moviews through filmeet!!', null) !!}</p>
        <p class="toshowbalde">↑click</p>
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