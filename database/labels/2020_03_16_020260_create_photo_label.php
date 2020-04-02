<?php

use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreatePhotoLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('Photo', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('Photo');
        Neo4jSchema::dropIfExists('Photo');
    }
}
