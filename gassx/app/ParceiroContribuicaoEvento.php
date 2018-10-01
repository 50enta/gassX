<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParceiroContribuicaoEvento extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'parceiro_id', 'contribuicao_evento_id' ,
    ];

	  /**
     * Retorna o 
     *
     * @var array
     */
    public function contrinuicaoEvento(){
        return $this->belongsTo('App\ContribuicaoEvento');
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
