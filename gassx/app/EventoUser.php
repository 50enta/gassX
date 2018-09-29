<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoUser extends Model
{
    //



    /**
     * Retorna o o utilizador proprietário do evento em causa
     *
     * @var array
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

     /**
     * Retorna o 
     *
     * @var array
     */
    public function evento(){
        return $this->belongsTo('App\Evento');
    }
}
