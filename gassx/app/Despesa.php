<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'apagado', 'dataRegisto', 
    ];
}
