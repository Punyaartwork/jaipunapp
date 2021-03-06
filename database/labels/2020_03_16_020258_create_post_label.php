<?php

use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreatePostLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('Post', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('Post');
        Neo4jSchema::dropIfExists('Post');
    }
}
