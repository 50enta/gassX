<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    //


	/**
     * Retorna todos os eventos de um certo utilizador
     *
     * @var array
     */
    public function despesaParceiros(){
        return $this->hasMany('App\DespesaParceiro');
    }


    /**
     * Retorna todos os eventos de um certo utilizador
     *
     * @var array
     */
    public function parceiroContribuicaoEventos(){
        return $this->hasMany('App\ParceiroContribuicaoEvento');
    }

    /**
     * Retorna todos os eventos de um certo utilizador
     *
     * @var array
     */
    public function parceiroContribuicaos(){
        return $this->hasMany('App\ParceiroContribuicao');
    }
}
