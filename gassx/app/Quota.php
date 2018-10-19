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
        'activo', 'mes_id', 'ano_id' ,'valor_multa_id', 'multa_id'
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

    /**
     * Retorna o 
     *
     * @var array
     */
    public function valorQuota(){
        return $this->hasOne('App\ValorQuota');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function multa(){
        return $this->belongsTo('App\Multa');
    }
}
