<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'valor', 'dinheiro_id',
    ];


	/**
     * Retorna 
     *
     * @var array
     */
    public function despesa(){
        return $this->hasOne('App\Despesa');
    }

	 /**
     * Retorna o 
     *
     * @var array
     */
    public function dinheiro(){
        return $this->belongsTo('App\Dinheiro');
    }

}
