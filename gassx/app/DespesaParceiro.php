<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DespesaParceiro extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'apagado', 'descricao', 'dataRegisto', 
    ];


    /**
     * Retorna o 
     *
     * @var array
     */
    public function despesa(){
        return $this->belongsTo('App\Despesa');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function parceiro(){
        return $this->belongsTo('App\Parceiro');
    }
}
