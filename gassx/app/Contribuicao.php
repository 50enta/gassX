<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribuicao extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ativo'
    ];


    /**
     * Retorna o 
     *
     * @var array
     */
    public function parceiroContribuicaos(){
        return $this->hasOne('App\ParceiroContribuicao');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function userContribuicaos(){
        return $this->hasOne('App\UserContribuicao');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function entrada(){
        return $this->belongsTo('App\Entrada');
    }
}
