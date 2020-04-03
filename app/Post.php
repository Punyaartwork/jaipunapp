<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Post extends NeoEloquent
{
    protected $label = 'Post'; 
    protected $fillable = ['post','postPhoto','postTime', 'postLike','postComment'];
    public function join()
    {
        return $this->belongsTo('App\Join');
    }
    public function author()
    {
        return $this->belongsTo('App\User', 'POSTED');
    }
}
