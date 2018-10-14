<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContribuicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('ativo')->default('1');

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
        Schema::dropIfExists('contribuicaos');
    }
}
