<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class User extends NeoEloquent
{
    protected $label = 'User'; 
    protected $fillable = ['name','account','detail','profile', 'sex','api_token','fire_token'];
    public function joins()
    {
        return $this->hasMany('App\Join', 'JOINED')->with('user')->latest();
    }
    public function posts()
    {
        return $this->hasMany('App\Post', 'POSTED')->with('user')->latest();
    }
    public function stays()
    {
        return $this->hasMany('App\Stay', 'STAYED')->with('user')->latest();
    }
}
