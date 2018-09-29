<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    //

	/**
     * Retorna 
     *
     * @var array
     */
    public function contribuicaoEvento(){
        return $this->hasOne('App\ContribuicaoEvento');
    }


	/**
     * Retorna 
     *
     * @var array
     */
    public function pagamento(){
        return $this->hasOne('App\Pagamento');
    }

	/**
     * Retorna 
     *
     * @var array
     */
    public function contribuicao(){
        return $this->hasOne('App\Contribuicao');
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
