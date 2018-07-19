<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Request;

class User extends Authenticatable
{   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','password','userid',   
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'user_movie','user_id','movie_id')->withTimestamps();
    }
    
    public function want($movieId){
        
        $exist = $this->is_wanting($movieId);

        if ($exist) {
            // do nothingd
            return false;
        } else {
            // do "want"
            $this->movies()->attach($movieId);
            return true;
        }
    }
    
    public function dont_want($movieId)
    {  
        // Is the user already "want"?
        $exist = $this->is_wanting($movieId);
        if ($exist) {
            // remove "want"
          $this->movies()->detach($movieId);
        } else {
            // do nothing
            return false;
        }
    }
    
    public function is_wanting($movieIdOrCode)
    {  
 
        $movie_code_exists = $this->movies()->where('code', $movieIdOrCode)->exists();
            
        if($movie_code_exists == false){
            $movie_id_exists = $this->movies()->where('movie_id', $movieIdOrCode)->exists();
            return $movie_id_exists;
        }else{
            return $movie_code_exists;
        }
         
    }
    
    //申請機能
    
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow','user_id','follow_id')->withPivot('code')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withPivot('code')->withTimestamps();
    }
    
     public function which_movies(Request $request)
    {
        $code = $request;
        return $this->followings()->where('code', $code);
    }
    
     public function follow($id,$code)
    {   
        $exist = $this->is_following($id,$code);
        
        if ($exist) {

            return false;
        } else {

            $this->followings()->attach($id, ['code' => $code]);
        
            return true;
 
        }
    }

    public function unfollow($id,$code)
    {
        // Is the user already "want"?
        $exist = $this->is_following($id,$code);
        if ($exist) {
            // remove "want"
            \DB::delete("DELETE FROM user_follow WHERE user_id = ? AND follow_id = ? AND code = $code", [$this->id, $id]);
            return true;
            
        } else {
            // do nothing
            return false;
        }
    }

    public function is_following($userId,$code)
    {    
         $user = User::find($userId);
         return $this->followings()->where('follow_id', $userId)->where('code', $code)->exists();
    }

   
    
    
    
}