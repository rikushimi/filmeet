<body id="main">

@extends('layouts.app')
@section('content')
    @if (Auth::check())
      <p><a href="{{ url('show')}}">gomimasa</a></p>
    @else
    <div class="center">
        <div class="text-center">
                 <h1 id="title">Filmeet</h1>
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