<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParceiroContribuicaoEvento extends Model
{
    //


	  /**
     * Retorna o 
     *
     * @var array
     */
    public function contrinuicaoEvento(){
        return $this->belongsTo('App\ContribuicaoEvento');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function parceiro(){
        return $this->belongsTo('App\Parceiro');
    }
}
