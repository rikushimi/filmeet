@if (count($movies) > 0)
<ul class="media-list">
@foreach ($movies as $movie)
<?php $user = $movie->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                <li><img src="https://image.tmdb.org/t/p/w500{{$movie->image}}">{{$movie->name}}</li>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $movies->render() !!}
@endif