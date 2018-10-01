<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DespesaEvento extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'contribuicao_evento_id', 'despesa_id',  
    ];

    /**
     * Retorna o 
     *
     * @var array
     */
    public function contribuicaoEvento(){
        return $this->belongsTo('App\ContribuicaoEvento');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function despesa(){
        return $this->belongsTo('App\Despesa');
    }


}
