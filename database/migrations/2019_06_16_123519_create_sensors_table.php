<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id'); // Relatie DB met Kamer ID
            $table->string('title'); // Titel Sensor
            $table->text('description'); // Omschrijving Sensor
            $table->text('celcius')->default(20); // Sensor Celcius
            $table->text('fahrenheit')->default(46); // Sensor Fahrenheit
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
        Schema::dropIfExists('sensors');
    }
}
