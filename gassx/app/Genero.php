<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //
	 protected $fillable = [
        'descricao', 
    ];



    public function users()
    {
        return $this->hasMany('App\User');
    }
}
