@extends('layouts.app')
    @if (Auth::check())
    @include('commons.navbar')
    @endif
@section('content')

    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Filmeet</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login', 'Log in', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection