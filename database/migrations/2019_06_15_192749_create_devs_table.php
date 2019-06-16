<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id'); // Relatie DB met Kamer ID
            $table->string('title'); // Titel Dev
            $table->text('description'); // Omschrijving Dev
            $table->text('status')->default('OFF'); // Status AAN/UIT Dev
            $table->text('colorhex')->default('#000000'); // kleur Dev
            $table->text('brightness')->default(50); // Helderheid Dev
            //$table->boolean('completed')->default(false); // Taak niet std afgerond
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
        Schema::dropIfExists('devs');
    }
}
