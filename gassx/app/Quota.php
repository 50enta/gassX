<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    //



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
    public function mes(){
        return $this->belongsTo('App\Mes');
    }

     /**
     * Retorna o 
     *
     * @var array
     */
    public function ano(){
        return $this->belongsTo('App\Ano');
    }
}
