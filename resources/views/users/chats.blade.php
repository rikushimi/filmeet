
<ul class="media-list">
    
@foreach ($chats as $chat)
    <?php $user = $chat->user; ?>
        <div class="chats-body">
            <div class="chat-author">
                {!! link_to_route('users.chat', $user->name, ['id' => $user->id]) !!} <span class="text-muted"> {{ $chat->created_at }}</span>
            </div>
            <div class="chat-contents">
                <p>{!! nl2br(e($chat->content)) !!}</p>
            </div>        
        </div>
            <div>
                @if (Auth::id() == $chat->user_id)
                    {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
@endforeach
</ul>
{!! $chats->render() !!}

