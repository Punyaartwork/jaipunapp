<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Join extends NeoEloquent
{
    protected $label = 'Join'; 
    protected $fillable = ['join','joinPhoto','joinItem','joinLocation','joinLatitude', 'joinLongitude','joinDistance','joinTime'];
    public function user()
    {
        return $this->belongsTo('App\User', 'JOINED');
    }
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'JOINED')->with('user');
    }
    public function stays()
    {
        return $this->belongsToMany('App\Stay', 'JOINED')->with('user');
    }
}
