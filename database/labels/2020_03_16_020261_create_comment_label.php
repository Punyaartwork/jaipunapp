<?php

use Illuminate\Support\Facades\Schema;
use Vinelab\NeoEloquent\Schema\Blueprint;
use Vinelab\NeoEloquent\Migrations\Migration;

class CreateCommentLabel extends Migration
{
    public function up()
    {
        Neo4jSchema::label('Comment', function(Blueprint $label)
        {
            $label->unique('uuid');
        });
    }
    public function down()
    {
        Neo4jSchema::drop('Comment');
        Neo4jSchema::dropIfExists('Comment');
    }
}
