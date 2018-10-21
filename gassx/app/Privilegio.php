<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo','descricao',
    ];

    /**
     * Retorna o 
     *
     * @var array
     */
    public function privilegioUsers(){
        return $this->hasMany('App\PrivilegioUser');
    }
}
