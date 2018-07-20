<?php

namespace App\Http\Controllers;

use App\Movie;
use App\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
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


    public function show($id)
    {  
       $user = User::find($id);
        //menu      
       $count_followings = $user->followings()->count();
       $count_followers = $user->followers()->count();
       
       return view('users.profile',[
              'user' => $user,  
              'count_followings' => $count_followings,
              'count_followers' => $count_followers,
           ]);
        
    }

    public function edit($id)
    {

       $user = User::find($id);
      
        $count_followings = $user->followings()->count();
        $count_followers = $user->followers()->count();
        
       return view('users.profile_edit',[
              'user' => $user,  
              'count_followings' => $count_followings,
              'count_followers' => $count_followers,
           ]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    
    public function followings($id)
    {
        
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);;
        
        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);
        //$movies = $user->movies();

        $data = [
            'user' => $user,
            'users' => $followers,
            //'movies' => $movies
        ];
        $data += $this->counts($user);

        return view('users.followers', $data);
    }
    
    public function mymovies($id)
    {
        $user = User::find($id);
        $movies = $user->movies()->paginate(5);
        
        
        $data=[
           'user' => $user,
           'movies' => $movies,
        ];
        
         $data += $this->counts($user); 
        
    return view('users.mymovies', $data);
    }
}

