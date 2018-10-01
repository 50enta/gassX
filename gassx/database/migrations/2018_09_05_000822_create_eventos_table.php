<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo');
            $table->string('descricao');
            $table->string('objectivo');
            $table->double('valorAContribuir');
            $table->date('dataInicio');
            $table->date('dataFim');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('eventos');
    }
}