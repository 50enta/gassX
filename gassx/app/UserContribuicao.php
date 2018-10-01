<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContribuicao extends Model
{
    //
     protected $fillable = [
        'activo', 'gasto_user_id','contribuicao_id',
    ];


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
