<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;



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
