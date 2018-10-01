<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivilegioUser extends Model
{
    //
    protected $fillable = [
        'activo', 'user_id','privilegio_id',
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
    public function privilegio(){
        return $this->belongsTo('App\Privilegio');
    }
}
