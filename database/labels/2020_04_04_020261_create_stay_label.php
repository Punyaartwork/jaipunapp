<?php

use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreateStayLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('Stay', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('Stay');
        Neo4jSchema::dropIfExists('Stay');
    }
}
