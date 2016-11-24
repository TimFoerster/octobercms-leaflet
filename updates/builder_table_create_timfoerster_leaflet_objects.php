<?php namespace TimFoerster\Leaflet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimfoersterLeafletObjects extends Migration
{
    public function up()
    {
        Schema::create('timfoerster_leaflet_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('maps_id')->unsigned()->nullable();
            $table->string('name', 255);
            $table->string('type', 42);
            $table->text('position');
            $table->text('parameters');
            $table->text('popup');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('timfoerster_leaflet_objects');
    }
}
