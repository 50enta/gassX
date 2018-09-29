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
}
