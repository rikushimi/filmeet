@if (count($movies) > 0)
<div class="mymovies clearfix">
@foreach ($movies as $movie)
<?php $user = $movie->user; ?>
  <div class="mymovies-image clearfix">
      <span><a href="{{url('match'.$movie->code)}}"><img src="https://image.tmdb.org/t/p/w500{{$movie->image}}"></a></span>
  </div>
@endforeach
</div>
{!! $movies->render() !!}
@endif