<?php

use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreateJoinLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('Join', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('Join');
        Neo4jSchema::dropIfExists('Join');
    }
}
