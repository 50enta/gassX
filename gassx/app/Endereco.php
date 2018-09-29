<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //


    /**
     * Retorna 
     *
     * @var array
     */
    public function eventos(){
        return $this->hasMany('App\Evento');
    }

     /**
     * Retorna 
     *
     * @var array
     */
    public function users(){
        return $this->hasMany('App\User');
    }
}
