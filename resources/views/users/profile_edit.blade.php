<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>     
    <div class="col-xs-6">   
     
     <div class="P-register">
                    <div class="R-panel-body">
                     {!! Form::open(['route' => 'signup.post']) !!}
 
                     <div class="form-group">
                        {!! Form::label('age', 'age') !!}
                         <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" required>
                     </div>
                     
                    <div class="form-group">
                        {!! Form::label('sex', 'sex') !!}
                        <input type="radio" name="sex" value="man" checked="checked">Man 
                        <input type="radio" name="sex" value="womwen">Woman
                    </div>

                    <div class="form-group">
                        {!! Form::label('favoritemovies', 'Favorite Movies') !!}
                        <input id="favmovie" type="text" class="form-control" name="favoritemovies" value="{{ old('favoritemovies') }}" required>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('comment', 'Comment') !!}
                        <input id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required>
                    </div>
    </div>
                    
                    {!! Form::close() !!}
                     
                </div>
                
     <div class="update_button">
                     <a href="{{route('profile.edit', Auth::id())}}">update</a>
    </div>
    
        
   </div> 



@endsection
</body>