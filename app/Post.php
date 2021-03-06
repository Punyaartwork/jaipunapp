<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Post extends NeoEloquent
{
    protected $label = 'Post'; 
    protected $fillable = ['post','postPhoto','postTime', 'postLike','postComment','postReview'];
    public function join()
    {
        return $this->hasOne('App\Join', 'JOINED');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'POSTED');
    }
}
