<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContribuicaoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuicao_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo')->default('1');
            
            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->integer('entrada_id')->unsigned();
            $table->foreign('entrada_id')->references('id')->on('entradas');
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
        Schema::dropIfExists('contribuicao_eventos');
    }
}
