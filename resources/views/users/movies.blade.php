@if (count($movies) > 0)
<div class="mymovies clearfix">
@foreach ($movies as $movie)
<?php $user = $movie->user; ?>

    <!--<div class="mymovies clearfix">-->
        <!--<div class="col-md-12 col-sm-12 col-xs-12">-->
            <div class="mymovies-image clearfix">
                <span><img src="https://image.tmdb.org/t/p/w500{{$movie->image}}"></span>
            </div>
@endforeach
            </div>
        </div>
    </div>
{!! $movies->render() !!}
@endif