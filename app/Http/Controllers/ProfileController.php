<?php

namespace App\Http\Controllers;

use App\Movie;
use App\User;
use Illuminate\Http\Request;
use Validator;

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

    public function edit()
    {
       $user = \Auth::user();
       
       return view('users.profile_edit', [
           'user' => $user,
           ]);
    }


    public function update(Request $request)
    {
        $user = \Auth::user();
        
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->favmovie = $request->favmovie;
        $user->comment = $request->comment;
        
        $user->save();
       
       $validator = Validator::make($request->all(), [
        'age' => 'numeric|between:0,150',
        'favmovie' => 'max:50',
        'comment' => 'max:140',
    ]);

    // バリデーションエラーだった場合
        if ($validator->fails()) {
        return redirect('profile_edit/error')
            ->withErrors($validator)
            ->withInput();
        }
    
        return redirect()->route('profile.get', ['id' => $user->id]);
    }


    public function destroy($id)
    {
        //
    }
    
    public function followings($id)
    {
        
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);
        
        $followlist=\DB::table('user_follow')
        ->join('users', 'users.id', '=' , 'user_follow.follow_id')
        ->join('movies', 'movies.code', '=' , 'user_follow.code')
        ->select('users.name','users.id', 'movies.name as moviename', 'movies.image' ) 
        ->where('user_follow.user_id', $id)->get();

        $data = [
            'user' => $user,
            'users' => $followings,
            'friends' => $followlist,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);
        
        $followerlist=\DB::table('user_follow')
        ->join('users', 'users.id', '=' , 'user_follow.user_id')
        ->join('movies', 'movies.code', '=' , 'user_follow.code')
        ->select('users.name','users.id', 'movies.name as moviename', 'movies.image' ) 
        ->where('user_follow.follow_id', $id)->get();


        $data = [
            'user' => $user,
            'users' => $followers,
            'friends' => $followerlist,
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

