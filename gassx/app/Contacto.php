<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'numero',  
    ];

    /**
     * Retorna o utilizador do contacto   
     *
     * @var array
     */
    public function user(){
        return $this->hasOne('App\User');
    }
}
