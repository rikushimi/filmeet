<body id="main">

@extends('layouts.app')


@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <p>申し訳ありませんがページが表示できませんのでお戻りください</p>
    @else
    <div class="center">
        <div class="text-center">
                 <h1 id="title">Filmeet</h1>
                 <h2>Wanna meet new people through movies?</h2>
                    <div class="button1">    
<<<<<<< HEAD
                        {!! link_to_route ('signup.get', 'Sign up now!', null) !!}
=======
                        {!! link_to_route('signup.get', 'Sign up now!', null) !!}
>>>>>>> 20c38d22692babfd7527d3ec60dbc131ec55e702
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