<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class Stay extends NeoEloquent
{
    protected $label = 'Stay'; 
    protected $fillable = ['stay','stayTime','stayLike', 'stayComment'];
    public function join()
    {
        return $this->hasOne('App\Join', 'JOINED');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'STAYED');
    }
}
