<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    //
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'mes',  
    ];


     /**
     * Retorna 
     *
     * @var array
     */
    public function quota(){
        return $this->hasMany('App\Quota');
    }
}
