<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //


     /**
     * Retorna o 
     *
     * @var array
     */
    public function evento(){
        return $this->belongsTo('App\Evento');
    }
}
