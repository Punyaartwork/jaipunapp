<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Join extends NeoEloquent
{
    protected $label = 'Join'; 
    protected $fillable = ['join','joinPhoto','joinItem','joinLocation','joinLatitude', 'joinLongitude','joinDistance','joinTime'];
}
