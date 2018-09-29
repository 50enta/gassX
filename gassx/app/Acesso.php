<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'dataAcesso', 
    ];
}
