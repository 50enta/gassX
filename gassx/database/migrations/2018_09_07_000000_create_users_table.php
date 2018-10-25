<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('activo')->default('1');
            $table->string('codigo')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('status')->default('ATIVO');
            $table->string('foto')->nullable();
            $table->double('saldo')->default('0');
            $table->string('username');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('obs');
            $table->boolean('confirmado')->default('0');

           
            
            $table->integer('contacto_id')->unsigned()->nullable();
            $table->integer('genero_id')->unsigned()->nullable();    //unsigned();
            $table->integer('endereco_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
        });
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
