<body id="register-page">
@extends('layouts.app')

@section('content')


<div class="row">
            <div class="text-center">
            <h1 id="title3">Sign up</h1>
            </div>
    <div class="col-xs-offset-3 col-xs-6">   
     
     <div class="register">
                    <div class="panel-body">
                     {!! Form::open(['route' => 'signup.post']) !!}
                     
                     <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    
                    
                     <div class="form-group">
                        {!! Form::label('userid', 'User ID') !!}
               
                         <input id="userid" type="text" class="form-control" name="userid" value="{{ old('userid') }}" required>
        
                         @if ($errors->has('userid'))
                             <span class="help-block">
                                <strong>{{ $errors->first('userid') }}</strong>
                             </span>
                         @endif
                     </div>
                     
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                        
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', ' Password (confirm) ') !!}
                        <input id="password1" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                    </div>
                    
                    
                    
                     <div class="text-right">
                        {!! Form::submit('Register',  ['id' => "loginButton"]) !!}
                    </div>
                    
    </div>
                    
                    
                    
                    {!! Form::close() !!}
                     
                </div>
    
        
   </div> 
</div>


@endsection
</body>