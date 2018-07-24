@extends('layouts.app')

@section('content')
   
        
        <div class ="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $chat_user->name }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-8">
            
            <h1>TimeLine</h1>
    

            @if (count($chats) > 0)
                @include('users.chats', ['chats' => $chats])
            @endif
        </div>
        
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br >
    <div class="col-xs-8">
    @if (Auth::id() == $user->id)
        {!! Form::open(['route' => 'chats.store']) !!}
            <div class="chatform-group">
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                {!! Form::hidden('match_id',$id)!!}
                {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
                {!! Form::close() !!}
    @endif
  
@endsection