<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    //

    /**
     * Retorna o 
     *
     * @var array
     */
    public function privilegioUsers(){
        return $this->hasMany('App\PrivilegioUser');
    }
}
