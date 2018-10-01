<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContribuicaoEvento extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'gasto_user_id', 'contribuicao_evento_id' ,
    ];

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
