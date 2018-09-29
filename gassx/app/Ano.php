<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    //




    /**
     * Retorna 
     *
     * @var array
     */
    public function quota(){
        return $this->hasMany('App\Quota');
    }
}
