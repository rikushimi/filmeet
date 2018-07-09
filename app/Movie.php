<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['code','name'];
    
    public function users()
    {
        return $this->belongsToMany(User::class,'user_movies','movie_id','user_id')->withTimestamps();
    }
}
