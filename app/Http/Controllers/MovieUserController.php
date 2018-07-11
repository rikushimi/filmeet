<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieUserController extends Controller
{   
    public function want(Request $request)
    {  

       
         $code = $request->code;
         $search = tmdb()->getMovie($code);
        
         $name = $search -> getTitle();
         $image = $search -> getPoster();

        //db ni aru ka check
        // nakereba hozon 
        // name ga hituyou
        
        $movie = Movie::firstOrCreate([
            'code' => $code,
            'name' =>$name, 
            'image' =>$image,
            ]); 
        \Auth::user()->want($movie->id);
        
        //見たいボタン押した人表示
        $movie = Movie::find($movie->id);
        $want_users = $movie->users;
         
        return view('movies.time',[
             'name' => $name,
             'image' => $image,
             'movie' => $movie,
             'want_users' => $want_users,
           ]);
    }

    public function dont_want(Request $request) {   
        
       
        $code = $request->code;
        $search = tmdb()->getMovie($code);
        
        $name = $search -> getTitle();
        $image = $search -> getPoster();
        
        $movie = Movie::firstOrCreate([
            'code' =>$code,
            'name' =>$name, 
            'image' =>$image,
            ]); 
        
        $movieId = $movie->id;
        $movieCode = $movie->code;
        
        if (\Auth::user()->is_wanting($movieCode)) {
            $movieId = Movie::where('code', $movieCode)->first()->id;
            \Auth::user()->dont_want($movieId);
        }
        return redirect()->back();
    }
}
