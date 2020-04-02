<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Photo extends NeoEloquent
{
    protected $label = 'photo'; 
    protected $fillable = ['photo','photoTime'];
}
