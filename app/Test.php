<?php

namespace Vinelab\Cms;


class Test extends NeoEloquent
{
    protected $label = 'Test'; // or array('User', 'Fan')
    protected $fillable = ['name', 'email'];
}
