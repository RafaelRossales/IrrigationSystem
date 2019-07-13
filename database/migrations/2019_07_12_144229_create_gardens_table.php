<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGardensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plants_id')->unsigned();
            $table->integer('devices_id')->unsigned();
            $table->string('local');
            $table->float('humid');            
            $table->timestamps();
            $table->foreign('plants_id')->references('id')->on('plants')
                  ->onDelete('restrict');
            $table->foreign('devices_id')->references('id')->on('devices')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gardens');
    }
}
