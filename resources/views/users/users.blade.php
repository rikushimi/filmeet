<div class="follow-list">
    <div class="list-title1 clearfix">
        Movie name           
    </div>
    <div class="list-title2 clearfix">
        Username
    </div>
    @if (count($users) > 0)
        <div class="media-list">
            @foreach ($friends as $user)
            
                <div class="list-content1">
                    <a href="{{url('theater'.$user->code)}}">{{$user->moviename}}</a>
               </div>
               <div class="list-content2">
                    <a href="{{url('profile'.$user->id)}}">{{$user->name}}</a>
                </div>
           
            @endforeach
        </div>
        {!! $friends->render() !!}
    @endif
</div>