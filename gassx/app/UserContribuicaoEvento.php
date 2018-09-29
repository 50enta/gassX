<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContribuicaoEvento extends Model
{
    //


	/**
     * Retorna o 
     *
     * @var array
     */
    public function contribuicaoEvento(){
        return $this->belongsTo('App\ContribuicaoEvento');
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
