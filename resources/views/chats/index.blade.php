<ul class="media-list">
@foreach ($chats as $chat)
    <?php $user = $chat->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                <p>{!! nl2br(e($chat->content)) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>