<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Comment extends NeoEloquent
{
    protected $label = 'comment'; 
    protected $fillable = ['comment','commentTime'];
}
