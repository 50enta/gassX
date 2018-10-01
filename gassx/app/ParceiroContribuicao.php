<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParceiroContribuicao extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'parceiro_id', 'contribuicao_id' ,
    ];

	/**
     * Retorna o 
     *
     * @var array
     */
    public function contribuicao(){
        return $this->belongsTo('App\Contribuicao');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function perceiro(){
        return $this->belongsTo('App\Parceiro');
    }
}
