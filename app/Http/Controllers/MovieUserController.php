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

        //db ni aru ka check
        // nakereba hozon 
        // name ga hituyou
        
        $movie = Movie::firstOrCreate([
            'code' => $code,
            'name' =>$name, 
            ]); 
        \Auth::user()->want($movie->id);
         
        return redirect()->back();
    }

    public function dont_want(Request $request) {   
        
       
        $code = $request->code;
        $search = tmdb()->getMovie($code);
        
        $name = $search -> getTitle();
        $movie = Movie::firstOrCreate([
            'code' =>$code,
            'name' =>$name, 
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
