<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $fillable = ['content', 'user_id','match_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
