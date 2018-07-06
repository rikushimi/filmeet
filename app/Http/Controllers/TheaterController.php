<?php

namespace App\Http\Controllers;


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
        $image = $search -> getPoster();
        $title = $search ->getTitle();
        
       return view('movies.theater',[
                
             'search' => $search,
             'title' => $title,
             'image' => $image,
           ]);
    }
    
    public function show1()
    {  
        //dead pool
        $search1 = tmdb()->getMovie(293660);
        $image1 = $search1 -> getPoster();
        $title1 = $search1 ->getTitle();
        
       return view('movies.theater1',[
                
             'search1' => $search1,
             'title1' => $title1,
             'image1' => $image1,
             
           ]);
    }
    
      public function show2()
    {  
        //dead pool
        $search2 = tmdb()->getMovie(343668);
        $image2 = $search2 -> getPoster();
        $title2 = $search2 ->getTitle();
        
       return view('movies.theater2',[
                
             'search2' => $search2,
             'title2' => $title2,
             'image2' => $image2,
             
           ]);
    }
    
      public function show3()
    {  
        //dead pool
        $search3 = tmdb()->getMovie(348350);
        $image3 = $search3 -> getPoster();
        $title3 = $search3 ->getTitle();
        
       return view('movies.theater3',[
                
             'search3' => $search3,
             'title3' => $title3,
             'image3' => $image3,
             
           ]);
    }
    
     public function show4()
    {  
        //dead pool
        $search4 = tmdb()->getMovie(315635);
        $image4 = $search4 -> getPoster();
        $title4 = $search4 ->getTitle();
        
       return view('movies.theater4',[
                
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
