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
            $table->boolean('activo')->default('1');
            $table->string('descricao');
            $table->string('objectivo')->nullable();
            $table->double('valorAContribuir');
            $table->boolean('fechado')->default('0');
            $table->boolean('decorreu')->default('0');

            $table->timestamp('dataInicio')->useCurrent();
            $table->timestamp('dataFim')->useCurrent();

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');
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
