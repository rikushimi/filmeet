<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
