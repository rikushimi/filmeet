<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    public function counts($user) {
        $count_followings = $user->followings()->count();
        $count_followers = $user->followers()->count();
        $count_mymovies =$user->movies->count();
        $count_match =0;
       
        $codes = \DB::table('movies')
              ->select('code')->get();
          
        $myId = \Auth::id(); 
       
        foreach($codes as $code){
           
           $follows =\DB::table('user_follow')
                   ->where('code',$code->code)
                   ->where('user_id',$myId)
                   ->select('follow_id')->get(); 
    
            if($follows){
              foreach($follows as $follow){
                 $followID = $follow->follow_id;
          
                 $matchId = \DB::table('user_follow')
                           ->where('code',$code->code)
                           ->where('user_id',$followID)
                           ->where('follow_id',$myId)
                           ->select('user_id')->get();
       
                 foreach($matchId as $mmid){
                    $count_match++;
                 }
              }
            }  
        }
        
        return [
            'count_followings' => $count_followings,
            'count_followers' => $count_followers,
            'count_mymovies' => $count_mymovies,
            'count_match' => $count_match,
        ];
    }
}
