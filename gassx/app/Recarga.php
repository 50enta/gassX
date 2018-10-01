<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    //
	 protected $fillable = [
        'activo', 'valor','user_id', 
    ];

	/**
     * Retorna o 
     *
     * @var array
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
