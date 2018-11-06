<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    //

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ativo', 'codigo',  'nome', 'descricao', 'endereco_id', 
    ];

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

    /**
     * Retorna o 
     *
     * @var array
     */
    public function endereco(){
        return $this->belongsTo('App\Endereco');
    }
}
