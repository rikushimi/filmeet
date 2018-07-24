
<ul class="media-list">
  
@foreach ($chats as $chat)
  @if(Auth::id() == $chat->user_id)
     <div class= 'chat-left'>  
            <div class="chat-author">
                {!! link_to_route('users.chat', $user->name, ['id' => $user->id]) !!} <span class="text-muted"> {{ $chat->created_at }}</span>
            </div>
            <div class="chat-contents">
                <p>{!! nl2br(e($chat->content)) !!}</p>
            </div>        
                    {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
     </div> 
  @else
     <div class= 'chat-right'>
            <div class="chat-author">
                {!! link_to_route('users.chat', $chat_user->name, ['id' => $user->id]) !!} <span class="text-muted"> {{ $chat->created_at }}</span>
            </div>
            <div class="chat-contents">
                <p>{!! nl2br(e($chat->content)) !!}</p>
            </div>        
     </div>
  @endif
@endforeach
</ul>

{!! $chats->render() !!}

