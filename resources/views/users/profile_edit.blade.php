<body id="profile-blade">
@extends('layouts.app')
@section('content')
 
 <p class="profile-title">Profile</p>     
    <div class="col-xs-6">   
     
         <div class="P-register">
            <!--エラーメッセージ-->
            @if ($errors->any())
            <div class="errors">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
            @endif
        
            <div class="R-panel-body">
                {!! Form::model($user, ['route' => ['profile.update'], 'method' => 'put']) !!}
 
                <div class="form-group">
                    {!! Form::label('age', 'age') !!}
                    <input id="age" type="number"　class="form-control" name="age" value="{{ $user->age }}">
                </div>
                     
                <div class="form-group">
                    {!! Form::label('sex', 'sex') !!}
                    {!! Form::hidden('sex',$user->sex)!!}
                    <input type="radio" name="sex" value="Male" checked="checked">Male 
                    <input type="radio" name="sex" value="Female">Female
                </div>

                <div class="form-group">
                    {!! Form::label('favoritemovies', 'Favorite Movies') !!}
                    <input id="favmovie" type="text" class="form-control" name="favmovie" value="{{ $user->favmovie }}">
                </div>
                    
                <div class="form-group">
                    {!! Form::label('comment', 'Comment') !!}<br>
                    <textarea id="comment" type="text" wrap="soft" cols="110" rows="3" name="comment"  placeholder="Write you sel-introduction!"value="{{ $user->comment }}"></textarea>
                </div>
            </div>
            <div class="update_button">
                {!! Form::submit('update') !!}
            </div>
                    {!! Form::close() !!}
                     
        </div>
                
     
                    
    
        <br><br><br>
        
   </div> 



@endsection
</body>