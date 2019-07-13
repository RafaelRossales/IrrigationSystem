<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedullesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedulles', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time');
            $table->date('date');
            $table->enum('status',['E','D']);
            $table->float('IrrigationAmount');
            $table->integer('gardens_id')->unsigned();
            $table->integer('devices_id')->unsigned();

           // Foreign Keys
            
            $table->foreign('gardens_id')->references('id')->on('gardens')
                  ->onDelete('restrict');
            $table->foreign('devices_id')->references('id')->on('devices')
                  ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedulles');
    }
}
