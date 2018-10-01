<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo','descricao',
    ];

    /**
     * Retorna 
     *
     * @var array
     */
    public function eventos(){
        return $this->hasMany('App\Evento');
    }

     /**
     * Retorna 
     *
     * @var array
     */
    public function users(){
        return $this->hasMany('App\User');
    }
}
