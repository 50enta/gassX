<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //

	  /**
     * Retorna 
     *
     * @var array
     */
    public function quotaPagamentos(){
        return $this->hasMany('App\QuotaPagamento');
    }

	/**
     * Retorna o 
     *
     * @var array
     */
    public function entrada(){
        return $this->belongsTo('App\Entrada');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function gastoUser(){
        return $this->belongsTo('App\GastoUser');
    }
}
