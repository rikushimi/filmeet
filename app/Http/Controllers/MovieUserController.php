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
        // $search1 = tmdb()->getMovie(293660);
        // $search2 = tmdb()->getMovie(343668);
        // $search3 = tmdb()->getMovie(348350);
        // $search4 = tmdb()->getMovie(315635);
        
        // if($mid){
        //     $code = $search->getId();
        //     $name = $search->getTitle();
        // }elseif($mid1){
        //     $code = $search1->getId();
        //     $name = $search1->getTitle();
        // }elseif($search2){
        //     $code = $search2->getId();
        //     $name = $search2->getTitle();
        // }elseif($search3){            
        //     $code = $search3->getId();
        //     $name = $search3->getTitle();
        // }else{
        //     $code = $search4->getId();
        //     $name = $search4->getTitle();
        // }
        
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
        
        /*$search  = tmdb()->getMovie(316029);
        $search1 = tmdb()->getMovie(293660);
        $search2 = tmdb()->getMovie(343668);
        $search3 = tmdb()->getMovie(348350);
        $search4 = tmdb()->getMovie(315635);
        
        if($search){
            $code = $search->getId();
            $name = $search->getTitle();
        }elseif($search1){
            $code = $search1->getId();
            $name = $search1->getTitle();
        }elseif($search2){
            $code = $search2->getId();
            $name = $search2->getTitle();
        }elseif($search3){            
            $code = $search3->getId();
            $name = $search3->getTitle();
        }else{
            $code = $search4->getId();
            $name = $search4->getTitle();
        }
        */
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
