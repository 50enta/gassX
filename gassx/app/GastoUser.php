<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GastoUser extends Model
{
    //
     protected $fillable = [
        'activo', 'valor', 'user_id',
    ];

	/**
     * Retorna 
     *
     * @var array
     */
    public function pagamentos(){
        return $this->hasMany('App\Pagamento');
    }

	/**
     * Retorna 
     *
     * @var array
     */
    public function userContribuicaoEventos(){
        return $this->hasMany('App\UserContribuicaoEvento');
    }


	/**
     * Retorna 
     *
     * @var array
     */
    public function userContribuicaos(){
        return $this->hasMany('App\UserContribuicao');
    }


    /**
     * Retorna 
     *
     * @var array
     */
    public function users(){
        return $this->belongsTo('App\User');
    }

}
