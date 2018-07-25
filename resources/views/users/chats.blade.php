<body id="chats-blade">
    <div class="media-list">
        <div class="chat-frame">   
            @foreach ($chats as $chat)
              @if(Auth::id() == $chat->user_id)
                 <div class="chat-right">  
                        <div class="chat-author">
                            {!! link_to_route('users.chat', $user->name, ['id' => $user->id]) !!} <span class="text-muted"> {{ $chat->created_at }}</span>
                        </div>
                        <div class="chat-contents">
                            <p class="chat-p-r">{!! nl2br(e($chat->content)) !!}</p>
                        </div>        
                                
                 </div> 
                 
                 
              @else
                 <div class= "chat-left">
                        <div class="chat-author">
                            {!! link_to_route('users.chat', $chat_user->name, ['id' => $user->id]) !!} <span class="text-muted"> {{ $chat->created_at }}</span>
                        </div>
                        <div class="chat-contents">
                            <p class="chat-p-l">{!! nl2br(e($chat->content)) !!}</p>
                        </div>
                        
                 </div>
                 
                 
              @endif
            @endforeach
         {!! $chats->render() !!}   
        </div>
        
    </div>

</body>
