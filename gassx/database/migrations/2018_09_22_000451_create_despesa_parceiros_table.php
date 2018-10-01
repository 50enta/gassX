<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespesaParceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesa_parceiros', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo');
            $table->integer('parceiro_id')->unsigned();
            $table->foreign('parceiro_id')->references('id')->on('parceiros');
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
        Schema::dropIfExists('despesa_parceiros');
    }
}
