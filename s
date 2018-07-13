[1mdiff --git a/app/Http/Controllers/MovieUserController.php b/app/Http/Controllers/MovieUserController.php[m
[1mindex 7435b0d..cff3528 100644[m
[1m--- a/app/Http/Controllers/MovieUserController.php[m
[1m+++ b/app/Http/Controllers/MovieUserController.php[m
[36m@@ -44,7 +44,7 @@[m [mclass MovieUserController extends Controller[m
         $title = $movie -> getTitle();[m
         $stmovie = Movie::firstOrCreate([[m
             'code' =>$code,[m
[31m-            'title' =>$title, [m
[32m+[m[32m            'name' =>$title,[m[41m [m
             ]); [m
         [m
         $movieId = $stmovie->id;[m
[1mdiff --git a/app/Http/Controllers/MoviesController.php b/app/Http/Controllers/MoviesController.php[m
[1mindex 976f38e..244538f 100644[m
[1m--- a/app/Http/Controllers/MoviesController.php[m
[1m+++ b/app/Http/Controllers/MoviesController.php[m
[36m@@ -28,7 +28,7 @@[m [mclass MoviesController extends Controller[m
 [m
 	[m
     public function show()[m
[31m-    {   [m
[32m+[m[32m    {[m[41m       [m
             $movies =tmdb()->getNowPlayingMovies();[m
             //dd($movies[0]);[m
              return view('movies.show',[[m
[1mdiff --git a/app/Http/Controllers/TimeController.php b/app/Http/Controllers/TimeController.php[m
[1mdeleted file mode 100644[m
[1mindex ddec245..0000000[m
[1m--- a/app/Http/Controllers/TimeController.php[m
[1m+++ /dev/null[m
[36m@@ -1,144 +0,0 @@[m
[31m-<?php[m
[31m-[m
[31m-namespace App\Http\Controllers;[m
[31m-[m
[31m-[m
[31m-use Illuminate\Http\Request;[m
[31m-[m
[31m-[m
[31m-class TimeController extends Controller[m
[31m-{[m
[31m-[m
[31m-    public function index()[m
[31m-    {[m
[31m-        //[m
[31m-    }[m
[31m-[m
[31m-[m
[31m-    public function create()[m
[31m-    {[m
[31m-        //[m
[31m-    }[m
[31m-[m
[31m-[m
[31m-    public function store(Request $request)[m
[31m-    {[m
[31m-        //[m
[31m-    }[m
[31m-[m
[31m-[m
[31m-    public function show()[m
[31m-    {   [m
[31m-        //the greatest showman[m
[31m-        $search = tmdb()->getMovie(316029);[m
[31m-        $image = $search -> getPoster();[m
[31m-        $title = $search ->getTitle();[m
[31m-        [m
[31m-        [m
[31m-       return view('movies.time',[[m
[31m-                [m
[31m-             'search' => $search,[m
[31m-             'title' => $title,[m
[31m-             'image' => $image,[m
[31m-             [m
[31m-           ]);[m
[31m-    }[m
[31m-[m
[31m- public function show1()[m
[31m-    {   [m
[31m-        [m
[31m-        //dead pool[m
[31m-        $search1 = tmdb()->getMovie(293660);[m
[31m-        $image1 = $search1 -> getPoster();[m
[31m-        $title1 = $search1 ->getTitle();[m
[31m-        [m
[31m-        [m
[31m-       return view('movies.time1',[[m
[31m-                [m
[31m-             [m
[31m-             'search1' => $search1,[m
[31m-             'title1' => $title1,[m
[31m-             'image1' => $image1,[m
[31m-             [m
[31m-           ]);[m
[31m-    }[m
[31m-[m
[31m-public function show2()[m
[31m-    {   [m
[31m-        //kingsman[m
[31m-        $search2 = tmdb()->getMovie(343668);[m
[31m-        $image2 = $search2 -> getPoster();[m
[31m-        $title2 = $search2 ->getTitle();[m
[31m-       [m
[31m-       [m
[31m-        [m
[31m-       return view('movies.time2',[[m
[31m-                [m
[31m-              'search2' => $search2,[m
[31m-             'title2' => $title2,[m
[31m-             'image2' => $image2,[m
[31m-             [m
[31m-           ]);[m
[31m-    }[m
[31m-    [m
[31m-    public function show3()[m
[31m-    {   [m
[31m-[m
[31m-               //starwars[m
[31m-         $search3 = tmdb()->getMovie(348350);[m
[31m-        $image3 = $search3 -> getPoster();[m
[31m-        $title3 = $search3 ->getTitle();[m
[31m-       [m
[31m-        [m
[31m-       return view('movies.time3',[[m
[31m-                [m
[31m-             [m
[31m-             'search3' => $search3,[m
[31m-             'title3' => $title3,[m
[31m-             'image3' => $image3,[m
[31m-             [m
[31m-           ]);[m
[31m-    }[m
[31m-    [m
[31m-    [m
[31m-    public function show4()[m
[31m-    {   [m
[31m-[m
[31m-         //spiderman[m
[31m-        $search4 = tmdb()->getMovie(315635);[m
[31m-        $image4 = $search4 -> getPoster();[m
[31m-        $title4 = $search4 ->getTitle();[m
[31m-        //$overview = $search -> getOverview();[m
[31m-       [m
[31m-        [m
[31m-       return view('movies.time4',[[m
[31m-                [m
[31m-             [m
[31m-             'search4' => $search4,[m
[31m-             'title4' => $title4,[m
[31m-             'image4' => $image4,[m
[31m-             [m
[31m-           ]);[m
[31m-    }[m
[31m-    [m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-    public function edit($id)[m
[31m-    {[m
[31m-        //[m
[31m-    }[m
[31m-[m
[31m-[m
[31m-    public function update(Request $request, $id)[m
[31m-    {[m
[31m-        //[m
[31m-    }[m
[31m-[m
[31m-[m
[31m-    public function destroy($id)[m
[31m-    {[m
[31m-        //[m
[31m-    }[m
[31m-}[m
[1mdiff --git a/resources/views/movies/show.blade.php b/resources/views/movies/show.blade.php[m
[1mindex 2742cbd..717ee62 100644[m
[1m--- a/resources/views/movies/show.blade.php[m
[1m+++ b/resources/views/movies/show.blade.php[m
[36m@@ -1,3 +1,4 @@[m
[32m+[m[32m<body id="showpage">[m
 @extends('layouts.app')[m
 @section('content')[m
 [m
[36m@@ -6,14 +7,19 @@[m
              <div class="movie-box clearfix">[m
                 <div class="col-md-12 col-sm-12 col-xs-12">[m
                   <div class="masa clearfix">[m
[32m+[m[41m      [m
                        @foreach($movies as $movie)[m
                                   <span>[m
[31m-                                   <a href="{{ url('theater/'). $movie->getId()}}">[m
[32m+[m[32m                                    <a href="{{ url('theater/'). $movie->getId()}}">[m
                                    <img src="https://image.tmdb.org/t/p/w500{{$movie->getPoster()}} " class="movie-box-image"></a><br>[m
                                   </span>[m
                        @endforeach        [m
                   </div>[m
                 </div>[m
               </div>[m
[32m+[m[41m              [m
[32m+[m[41m           [m
[32m+[m[41m               [m
[32m+[m[41m            [m
 @endsection[m
 </body>[m
\ No newline at end of file[m
[1mdiff --git a/resources/views/movies/time.blade.php b/resources/views/movies/time.blade.php[m
[1mindex 16e1573..dd2dac8 100644[m
[1m--- a/resources/views/movies/time.blade.php[m
[1m+++ b/resources/views/movies/time.blade.php[m
[36m@@ -14,7 +14,7 @@[m
    <div class=want_users>[m
      @foreach ($want_users as $user)[m
       <ul>[m
[31m-        <li>{{ $user->name }}</li>[m
[32m+[m[32m        <li><a href="{{ url('profile'). $user->id}}">{{$user->name}}</a></li>[m
       </ul>[m
      @endforeach[m
    </div>[m
[1mdiff --git a/routes/web.php b/routes/web.php[m
[1mindex 7ebbdf8..be73922 100644[m
[1m--- a/routes/web.php[m
[1m+++ b/routes/web.php[m
[36m@@ -2,7 +2,7 @@[m
 [m
 [m
 Route::get('/', function () {[m
[31m-    return view('show.get');[m
[32m+[m[32m    return view('welcome');[m
 });[m
 [m
 //sign up[m
[36m@@ -35,3 +35,8 @@[m [mRoute::group(['middleware' => ['auth']], function () {[m
     Route::resource('users', 'UsersController', ['only' => ['show']]);[m
 });[m
 [m
[32m+[m[32m//プロフィール[m
[32m+[m[32mRoute::group(['middleware' => ['auth']], function () {[m
[32m+[m[32m   Route::get('profile{id}', 'ProfileController@show')->name('profile.get');[m
[32m+[m[32m});[m
[32m+[m
