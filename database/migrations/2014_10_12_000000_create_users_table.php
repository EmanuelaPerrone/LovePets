<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $user) {
            $user->id();
            $user->string('nome');
            $user->string('cognome')->nullable();
            $user->string('email')->unique();
            $user->string('provider_id')->nullable();
            $user->string('avatar')->nullable();
            $user->timestamp('email_verified_at')->nullable();
            $user->bigInteger('telefono')->nullable();
            $user->string('password');
            $user->rememberToken();
            $user->timestamps();
        });

        DB::table('users')->insert([
            'nome'=> 'Mario',
            'cognome'=> 'Rossi',
            'email'=> 'm.rossi@gmail.com',
            'telefono'=> '3358746578',
            'password'=> '$2y$10$2JU9JjDJpfc4bJxJxGoDzOlqH5fdn0KwviYKh.A1CI/UL3u0Do5m2'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
