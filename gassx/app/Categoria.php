<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
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
    public function eventos(){
        return $this->hasMany('App\Evento');
    }
}
