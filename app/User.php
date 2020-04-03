<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class User extends NeoEloquent
{
    protected $label = 'User'; 
    protected $fillable = ['name','account','detail','profile', 'sex','api_token','fire_token'];
    public function create()
    {
        return $this->hasOne('App\Join');
    }
    public function posts()
    {
        return $this->hasMany('Post', 'POSTED');
    }
}
