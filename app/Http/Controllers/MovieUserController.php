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
 
         $stmovie = Movie::firstOrCreate([
            'code' => $code,
            'name' => $title,
            'image' => $image,
            ]); 
        
        \Auth::user()->want($stmovie->id);
        
        //見たいボタン押した人表示
        $search = Movie::find($stmovie->id);
        
        $want_users = $search->users;
         
        return view('movies.time',[
             'title' => $title,
             'image' => $image,
             'want_users' => $want_users,
           ]);
    }

    public function dont_want(Request $request) {   
        
       
        $code = $request->code;
        $movie = tmdb()->getMovie($code);
        
        $title = $movie -> getTitle();
        $stmovie = Movie::firstOrCreate([
            'code' =>$code,
            'name' =>$title, 
            ]); 
        
        $movieId = $stmovie->id;
        $movieCode = $stmovie->code;
        
        if (\Auth::user()->is_wanting($movieCode)) {
            $movieId = Movie::where('code', $movieCode)->first()->id;
            \Auth::user()->dont_want($movieId);
        }
        return redirect()->back();
    }
}
