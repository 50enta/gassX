<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValorQuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valor_quotas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('ativo')->default('1');
            $table->double('valor')->default('0');
            $table->date('dataInicio')->useCurrent();
            $table->date('dataFim')->useCurrent();
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
        Schema::dropIfExists('valor_quotas');
    }
}
