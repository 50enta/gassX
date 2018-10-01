<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'descricao', 'saida_id', 
    ];


    /**
     * Retorna 
     *
     * @var array
     */
    public function DespesaEventos(){
    
        return $this->hasMany('App\DespesaEvento');
    }

    /**
     * Retorna 
     *
     * @var array
     */
    public function despesaParceiros(){
        return $this->hasMany('App\DespesaParceiro');
    }

     /**
     * Retorna 
     *
     * @var array
     */
    public function despesaUsers(){
        return $this->hasMany('App\DespesaUser');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function saida(){
        return $this->belongsTo('App\Saida');
    }
}
