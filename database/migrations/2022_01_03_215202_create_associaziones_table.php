<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociazionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associaziones', function (Blueprint $user) {
            $user->id();
            $user->string('nome');
            $user->string('cf');
            $user->string('email')->unique();
            $user->string('provider_id')->nullable();
            $user->timestamp('email_verified_at')->nullable();
            $user->bigInteger('telefono');
            $user->string('sede');
            $user->integer('anno');
            $user->string('soci');
            $user->string('zonaCompetenza');
            $user->string('animali');
            $user->string('password');
            //$user->boolean('valida');
            $user->rememberToken();
            $user->timestamps();
        });

        DB::table('associaziones')->insert([
            'nome'=> 'Associazione TA',
            'cf'=> '36719287351',
            'email'=> 'associazione@gmail.com',
            'telefono'=> '3357536578',
            'sede'=>'Taranto',
            'anno'=>'2009',
            'soci'=>'6',
            'zonaCompetenza'=>'Puglia',
            'animali'=>'Cane',
            'password'=> '12345678',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associaziones');
    }
}
