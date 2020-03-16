<?php
/*
use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreateTestLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('Test', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('Test');
        Neo4jSchema::dropIfExists('Test');
    }
}
