<?php

namespace Vinelab\Cms;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Test extends NeoEloquent
{
    protected $label = 'Test'; // or array('User', 'Fan')
    protected $fillable = ['name', 'email'];
}
