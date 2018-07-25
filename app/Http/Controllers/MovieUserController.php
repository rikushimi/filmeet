<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieUserController extends Controller
{   
    public function want(Request $request)
    {  
         $code = $request->code;
         $movie = tmdb()-> getMovie($code);
         $title = $movie-> getTitle();
         $image = $movie-> getPoster();
    
         $stmovie = Movie::firstOrCreate([
            'code' => $code,
            'name' =>$title, 
            'image' =>$image,
            ]); 
        \Auth::user()->want($stmovie->id);

        return redirect()->route('theater.get', ['code' => $code]);
    }

    public function dont_want(Request $request) {   
        
       
        $code = $request->code;
        $movie = tmdb()->getMovie($code);
        $title = $movie -> getTitle();
        $image = $movie -> getPoster();
    
        $stmovie = Movie::firstOrCreate([
            'code' =>$code,
            'name' =>$title, 
            'image' =>$image,

            ]); 
        
        $movieId = $stmovie->id;
        $movieCode = $stmovie->code;

        if (\Auth::user()->is_wanting($movieCode)) {
            $movieId = Movie::where('code', $movieCode)->first()->id;
            \Auth::user()->dont_want($movieId);
        }
        
        return redirect()->route('theater.get',['code'=>$code]);
    }
    
    public function store(Request $request)
    {   
        \Auth::user()->follow($request->id,$request->code);
         
         $code = $request->code;
         
         return redirect()->route('theater.get',['code'=>$code]);
    }
    
    public function destroy(Request $request)
    {   
        \Auth::user()->unfollow($request->id, $request->code);
        
         $code = $request->code;

         return redirect()->route('theater.get',['code'=>$code]);
    }
   
    
}
