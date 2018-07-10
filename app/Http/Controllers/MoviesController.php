<?php

namespace App\Http\Controllers;


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
        //the greatest showman
        $code = 316029;
        $search = tmdb()->getMovie(316029);
        $image = $search -> getPoster();
        $title = $search ->getTitle();
        
        //dead pool
        $search1 = tmdb()->getMovie(293660);
        $image1 = $search1 -> getPoster();
        $title1 = $search1 ->getTitle();
        
        //kingsman
        $search2 = tmdb()->getMovie(343668);
        $image2 = $search2 -> getPoster();
        $title2 = $search2 ->getTitle();
        
        //starwars
         $search3 = tmdb()->getMovie(348350);
        $image3 = $search3 -> getPoster();
        $title3 = $search3 ->getTitle();
        
        //spiderman
        $search4 = tmdb()->getMovie(315635);
        $image4 = $search4 -> getPoster();
        $title4 = $search4 ->getTitle();
        //$overview = $search -> getOverview();
         return view('movies.show',[
             'code' => $code,
             'search' => $search,
             'title' => $title,
             'image' => $image,
             
             'search1' => $search1,
             'title1' => $title1,
             'image1' => $image1,
             
             'search2' => $search2,
             'title2' => $title2,
             'image2' => $image2,
             
              'search3' => $search3,
             'title3' => $title3,
             'image3' => $image3,
             
             'search4' => $search4,
             'title4' => $title4,
             'image4' => $image4,
             
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
