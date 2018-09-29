<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    //


	/**
     * Retorna o 
     *
     * @var array
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
