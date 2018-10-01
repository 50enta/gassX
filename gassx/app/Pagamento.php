<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'gasto_user_id', 'entrada_id' ,
    ];

	  /**
     * Retorna 
     *
     * @var array
     */
    public function quotaPagamentos(){
        return $this->hasMany('App\QuotaPagamento');
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
    public function gastoUser(){
        return $this->belongsTo('App\GastoUser');
    }
}
