<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContribuicaoEvento extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'evento_id', 'entrada_id', 'descricao', 'valor',
    ];


    /**
     * Retorna 
     *
     * @var array
     */
    public function despesaEventos(){
        return $this->hasMany('App\DespesaEvento');
    }


    /**
     * Retorna o 
     *
     * @var array
     */
    public function evento(){
        return $this->belongsTo('App\Evento');
    }


    /**
     * Retorna o 
     *
     * @var array
     */
    public function entrada(){
        return $this->belongsTo('App\Entrada');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function userContribuicaoEvento(){
        return $this->hasOne('App\UserContribuicaoEvento');
    }

     /**
     * Retorna o 
     *
     * @var array
     */
    public function parceiroContribuicaoEvento(){
        return $this->hasOne('App\ParceiroContribuicaoEvento');
    }
}
