<?php namespace LincolnBrito\Projects\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('lincolnbrito_projects_teams', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lincolnbrito_projects_teams');
    }
}
