<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DespesaUser extends Model
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
    public function user(){
        return $this->belongsTo('App\User');
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
