<body id="login-page">
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 id="title2">Log in</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
    

            {!! Form::open(['route' => 'login.post']) !!}
                
                <div class="form-group">
                    <div class="col-md-4">
                    {!! Form::label('userid', 'UserID') !!}
                    </div>
                
                    <div class="col-md-8">
                        <input id="userid" type="text" class="form-control" name="userid" value="{{ old('userid') }}" required autofocus>
                
                        @if ($errors->has('userid'))
                            <span class="help-block">
                                <strong>{{ $errors->first('userid') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
               
                <div class="form-group">
                     <div class="col-md-4">
                    {!! Form::label('password', 'Password') !!}
                    </div>
                     <div class="col-md-8">
                     <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                    </div>
                </div>
                
                <div class="text-right">
                {!! Form::submit('Log in', ['class' => "loginButton"]) !!}
                </div>
                
                <div class="text-center">
                <p class="newuser">New user?      {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
                </div>
                
                
            {!! Form::close() !!}

            
        </div>
    </div>
    
@endsection
</body>