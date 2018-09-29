<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParceiroContribuicaoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parceiro_contribuicao_eventos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('parceito_id')->unsigned();
            $table->foreign('parceito_id')->references('id')->on('parceiros');
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
        Schema::dropIfExists('parceiro_contribuicao_eventos');
    }
}
