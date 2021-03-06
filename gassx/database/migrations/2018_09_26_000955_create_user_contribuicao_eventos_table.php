<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserContribuicaoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contribuicao_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo')->default('1');

             $table->integer('gasto_user_id')->unsigned();
            $table->foreign('gasto_user_id')->references('id')->on('gasto_users');
             $table->integer('contribuicao_evento_id')->unsigned();
            $table->foreign('contribuicao_evento_id')->references('id')->on('contribuicao_eventos');
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
        Schema::dropIfExists('user_contribuicao_eventos');
    }
}
