<?php

namespace App\Http\Controllers;

use Vendor\Tmdb;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
   
    
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

	
    public function show()
    {   
            $movies =tmdb()->getNowPlayingMovies();
            //dd($movies[0]);
             return view('movies.show',[
                 'movies' => $movies,
                 ]);
        
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
