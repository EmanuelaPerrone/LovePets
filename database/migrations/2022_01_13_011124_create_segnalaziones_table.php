<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegnalazionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segnalaziones', function (Blueprint $table) {
            $table->id('id_segnalazione');
            $table->string('file')->nullable();
            $table->string('animale')->nullable();
            $table->string('tipoSegnalazione')->nullable();
            $table->string('zona')->nullable();
            $table->string('note')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean('anonimo')->nullable();
            $table->string('contatto')->nullable();
            $table->string('stato')->nullable();
            $table->string('nuova')->nullable();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('assoc_id')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('segnalaziones');
    }
}
