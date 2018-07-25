<div class="follow-list">
    <div class="clearfix">
        <div class="list-title1 clearfix">
            Movie name           
        </div>
        <div class="list-title2 clearfix">
            Username
        </div>
    </div>
    @if (count($friends) > 0)
      
            @foreach ($friends as $user)
            
                <div class="list-content1">
                    <a href="{{url('theater'.$user->code)}}">{{$user->moviename}}</a>
               </div>
               <div class="list-content2">
                    <a href="{{url('profile'.$user->id)}}">{{$user->name}}</a>
                </div>
           
            @endforeach
    
        {!! $friends->render() !!}
    @endif
 </div>