<?php

use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreateUserLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('User', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('User');
        Neo4jSchema::dropIfExists('User');
    }
}
