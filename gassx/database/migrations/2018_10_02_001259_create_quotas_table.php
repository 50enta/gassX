<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activo')->default('1');
            
            $table->integer('mes_id')->unsigned();
            $table->foreign('mes_id')->references('id')->on('mes');
            $table->integer('ano_id')->unsigned();
            $table->foreign('ano_id')->references('id')->on('anos');
            $table->integer('multa_id')->unsigned();
            $table->foreign('multa_id')->references('id')->on('multas');
            $table->integer('valor_quota_id')->unsigned();
            $table->foreign('valor_quota_id')->references('id')->on('valor_quotas');
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
        Schema::dropIfExists('quotas');
    }
}
