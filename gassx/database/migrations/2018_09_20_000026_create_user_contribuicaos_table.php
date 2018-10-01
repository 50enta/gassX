<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserContribuicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contribuicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo');

            $table->integer('gasto_user_id')->unsigned();
            $table->foreign('gasto_user_id')->references('id')->on('gasto_users');
            $table->integer('contribuicao_id')->unsigned();
            $table->foreign('contribuicao_id')->references('id')->on('contribuicaos');
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
        Schema::dropIfExists('user_contribuicaos');
    }
}
