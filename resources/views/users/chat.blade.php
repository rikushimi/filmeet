<body id="chat-blade">
@extends('layouts.app')

@section('content')
  <center> 
   <div class=chat-chat>     
        <div class ="chat-name">
                    <h3>Talk room with {{ $chat_user->name }}</h3>
        </div>
            
                @include('users.chats', ['chats' => $chats,'user' => $user,'chat_user'=>$chat_user])
           
     
        
    
   
    @if (Auth::id() == $user->id)
        {!! Form::open(['route' => 'chats.store']) !!}
        <div class="send-text">
                {!! Form::text('content', old('content'), [ 'rows' => '1']) !!}
                {!! Form::hidden('match_id',$id)!!}

                {!! Form::submit('✉',['class' => 'send'])!!}
                {!! Form::close() !!}
        </div>
    @endif
    
   </div>
   {!! $chats->render() !!} 
  </center>
@endsection
</body>