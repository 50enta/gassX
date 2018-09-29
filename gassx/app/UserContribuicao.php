<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContribuicao extends Model
{
    //


    /**
     * Retorna o 
     *
     * @var array
     */
    public function gastoUser(){
        return $this->belongsTo('App\GastoUser');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function contribuicoes(){
        return $this->belongsTo('App\Contribuicao');
    }
}
