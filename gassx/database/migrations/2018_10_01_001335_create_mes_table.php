<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesTable extends Migration
{  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('ativo')->default('1');
            
            $table->string('mes');
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
        Schema::dropIfExists('mes');
    }
}
