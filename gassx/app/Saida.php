<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    //


	/**
     * Retorna 
     *
     * @var array
     */
    public function despesa(){
        return $this->hasOne('App\Despesa');
    }

	 /**
     * Retorna o 
     *
     * @var array
     */
    public function dinheiro(){
        return $this->belongsTo('App\Dinheiro');
    }

}
