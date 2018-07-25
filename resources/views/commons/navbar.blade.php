<header>
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Filmeet</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="nav-design">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li>{!! link_to_route('show.get','Movie List')!!}</li>
                            <li class="dropdown">
                                 <li><a href="{{route('mymovies.get',Auth::user()->id)}}">Match list</a></li>
                                    <li><a href="{{route('profile.get',Auth::user()->id)}}">My profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                                </ul>
                            </li>
                        @else
                            <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                            <li>{!! link_to_route('login', 'Login') !!}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>