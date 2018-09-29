<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespesaEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesa_eventos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('contribuicao_evento_id')->unsigned();
            $table->foreign('contribuicao_evento_id')->references('id')->on('contribuicao_eventos');
            $table->integer('despesa_id')->unsigned();
            $table->foreign('despesa_id')->references('id')->on('despesas');
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
        Schema::dropIfExists('despesa_eventos');
    }
}
