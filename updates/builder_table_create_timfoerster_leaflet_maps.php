<?php namespace TimFoerster\Leaflet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimfoersterLeafletMaps extends Migration
{
    public function up()
    {
        Schema::create('timfoerster_leaflet_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('maxZoom')->default(18);
            $table->string('mapboxId', 255);
            $table->string('mapboxAccessToken', 255);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('timfoerster_leaflet_maps');
    }
}
