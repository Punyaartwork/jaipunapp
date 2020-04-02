<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class User extends NeoEloquent
{
    protected $label = 'User'; 
    protected $fillable = ['name','account','detail','profile', 'sex','api_token','fire_token'];
}
