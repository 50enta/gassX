<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotaPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quota_pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo')->default('1');
            
            $table->integer('pagamento_id')->unsigned();
            $table->foreign('pagamento_id')->references('id')->on('pagamentos');
            $table->integer('quota_id')->unsigned();
            $table->foreign('quota_id')->references('id')->on('quotas');
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
        Schema::dropIfExists('quota_pagamentos');
    }
}
