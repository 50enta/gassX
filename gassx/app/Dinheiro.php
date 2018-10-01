<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinheiro extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'valor', 
    ];



    /**
     * Retorna 
     *
     * @var array
     */
    public function saida(){
        return $this->hasOne('App\Saida');
    }

    /**
     * Retorna 
     *
     * @var array
     */
    public function entrada(){
        return $this->hasOne('App\Entrada');
    }
}
