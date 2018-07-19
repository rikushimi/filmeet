<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TheaterController extends Controller
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

    public function show($code)
    {        
       $movie = tmdb() -> getMovie($code);
       $title = $movie -> getTitle();
       $overview = $movie -> getOverview();
       $poster = $movie -> getPoster();
       $tag = $movie -> getTagline();
       $release = $movie ->  getMovieReleaseDate();
       $stmovie = Movie::first(); 
      
      if(Auth::user()->is_wanting($code)){    
      
           $search = Movie::find($stmovie->id);
           $want_users = $search->users()->paginate(10);
           
           return view('movies.theater',[
             'movie' => $movie,
             'title' => $title,
             'overview'=> $overview,
             'poster' => $poster,
             'code' => $code,
             'tag' => $tag,
             'release' => $release,
             'want_users'=> $want_users,
               ]);
        }           
       
        //$image = $search -> getPoster();
        //$title = $search ->getTitle();
        
       return view('movies.theater',[
             'movie' => $movie,
             'title' => $title,
             'overview'=> $overview,
             'poster' => $poster,
             'code' => $code,
             'tag' => $tag,
             'release' => $release,
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
