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


    public function show()
    {   
        //the greatest showman
        $search = tmdb()->getMovie(316029);
        $movie = new Movie();
        $movie->code = $search->getId();
        $movie->name = $search->getTitle();
        $movie->image_url = $search->getPoster();
       
        $image = $search -> getPoster();
        $title = $search ->getTitle();
        

         
        
       return view('movies.theater',[
             'movie' => $movie,
             'search' => $search,
             'title' => $title,
             'image' => $image,
           ]);
    }
    
    public function show1()
    {   
        //dead pool
        $search1 = tmdb()->getMovie(293660);
        $movie = new Movie();
        $movie->code = $search1->getId();
        $movie->name = $search1->getTitle();
        $movie->image_url = $search1->getPoster();
        
        $image1 = $search1 -> getPoster();
        $title1 = $search1 ->getTitle();
        
       return view('movies.theater1',[
             'movie' => $movie,                 
             'search1' => $search1,
             'title1' => $title1,
             'image1' => $image1,
             
           ]);
    }
    
      public function show2()
    {  
        //dead pool
        $search2 = tmdb()->getMovie(343668);
        $movie = new Movie();
        $movie->code = $search2->getId();
        $movie->name = $search2->getTitle();
        $movie->image_url = $search2->getPoster();
        
        $image2 = $search2 -> getPoster();
        $title2 = $search2 ->getTitle();
        
       return view('movies.theater2',[
             'movie' => $movie,    
             'search2' => $search2,
             'title2' => $title2,
             'image2' => $image2,
             
           ]);
    }
    
      public function show3()
    {  
        //dead pool
        $search3 = tmdb()->getMovie(348350);
        $movie = new Movie();
        $movie->code = $search3->getId();
        $movie->name = $search3->getTitle();
        $movie->image_url = $search3->getPoster();
        
        $image3 = $search3 -> getPoster();
        $title3 = $search3 ->getTitle();
        
       return view('movies.theater3',[
             'movie' => $movie,     
             'search3' => $search3,
             'title3' => $title3,
             'image3' => $image3,
             
           ]);
    }
    
     public function show4()
    {  
        //dead pool
        $search4 = tmdb()->getMovie(315635);
        $movie = new Movie();
        $movie->code = $search4->getId();
        $movie->name = $search4->getTitle();
        $movie->image_url = $search4->getPoster();
        
        $image4 = $search4 -> getPoster();
        $title4 = $search4 ->getTitle();
        
       return view('movies.theater4',[
             'movie' => $movie,  
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
