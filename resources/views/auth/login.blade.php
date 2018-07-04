@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                
                    <label for="userid" class="col-md-4 control-label">User ID</label>
                
                    <div class="col-md-6">
                        <input id="userid" type="text" class="form-control" name="userid" value="{{ old('userid') }}" required autofocus>
                
                        @if ($errors->has('userid'))
                            <span class="help-block">
                                <strong>{{ $errors->first('userid') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection