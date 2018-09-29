<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParceiroContribuicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parceiro_contribuicaos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('parceiro_id')->unsigned();
            $table->foreign('parceiro_id')->references('id')->on('parceiros');
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
        Schema::dropIfExists('parceiro_contribuicaos');
    }
}
