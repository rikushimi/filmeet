<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieUserController extends Controller
{   
    public function want(Request $request)
    {  

       
         $code = $request->code;
         $movie = tmdb()->getMovie($code);
        
         $title = $movie -> getTitle();
         $image = $movie -> getPoster();

        //db ni aru ka check
        // nakereba hozon 
        // name ga hituyou
        
        $stmovie = Movie::firstOrCreate([
         $overview = $movie -> getOverview();
         $poster = $movie -> getPoster();
         $tag = $movie -> getTagline();
         $release = $movie ->  getMovieReleaseDate();
         $stmovie = Movie::firstOrCreate([
            'code' => $code,
            'name' =>$title, 
            'image' =>$image,
            ]); 
        \Auth::user()->want($stmovie->id);
        //見たいボタン押した人表示
        $search = Movie::find($stmovie->id);
        $want_users = $search->users;
         
        return 
        view('movies.theater',[
             'title' => $title,
             'poster' => $poster,
             'want_users' => $want_users,
             'code' => $code,
             'overview'=> $overview,
             'tag' => $tag,
             'release' => $release,
           ]);
    }

    public function dont_want(Request $request) {   
        
       
        $code = $request->code;
        $movie = tmdb()->getMovie($code);
        $title = $movie -> getTitle();
        $image = $movie -> getPoster();
        $overview = $movie -> getOverview();
        $poster = $movie -> getPoster();
        $tag = $movie -> getTagline();
        $release = $movie ->  getMovieReleaseDate();

        
        $stmovie = Movie::firstOrCreate([
            'code' =>$code,
            'name' =>$title, 
            'image' =>$image,

            ]); 
        
        $movieId = $stmovie->id;
        $movieCode = $stmovie->code;
        
        $search = Movie::find($stmovie->id);
        $want_users = $search->users;
        
        if (\Auth::user()->is_wanting($movieCode)) {
            $movieId = Movie::where('code', $movieCode)->first()->id;
            \Auth::user()->dont_want($movieId);
        }
        
        return 
        view('movies.theater',[
             'title' => $title,
             'poster' => $poster,
             'want_users' => $want_users,
             'code' => $code,
             'overview'=> $overview,
             'tag' => $tag,
             'release' => $release,
           ]);
    }
    
    public function store(Request $request)
    {   
        \Auth::user()->follow($request->id,$request->code);
         
         $code = $request->code;
         $movie = tmdb()->getMovie($code);
         $title = $movie -> getTitle();
         $image = $movie -> getPoster();
         $overview = $movie -> getOverview();
         $poster = $movie -> getPoster();
         $tag = $movie -> getTagline();
         $release = $movie ->  getMovieReleaseDate();
         
         $stmovie = Movie::first(); 
            
         $search = Movie::find($stmovie->id);
         $want_users = $search->users; 
        
         return view('movies.theater',[
             'title' => $title,
             'poster' => $poster,
             'want_users' => $want_users,
             'code' => $code,
             'overview'=> $overview,
             'tag' => $tag,
             'release' => $release,
           ]);;
    }
    
    public function destroy(Request $request)
    {   
        \Auth::user()->unfollow($request->id, $request->code);
        
         $code = $request->code;
         $movie = tmdb()->getMovie($code);
         $title = $movie -> getTitle();
         $image = $movie -> getPoster();
         $overview = $movie -> getOverview();
         $poster = $movie -> getPoster();
         $tag = $movie -> getTagline();
         $release = $movie ->  getMovieReleaseDate();
         
         $stmovie = Movie::first(); 
            
         $search = Movie::find($stmovie->id);
         $want_users = $search->users; 
        
         return view('movies.theater',[
             'title' => $title,
             'poster' => $poster,
             'want_users' => $want_users,
             'code' => $code,
             'overview'=> $overview,
             'tag' => $tag,
             'release' => $release,
           ]);
    }
   
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }

}
