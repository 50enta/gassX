<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    //

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'mes_id', 'ano_id' ,
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
