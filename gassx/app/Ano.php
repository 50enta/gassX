<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    //
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ano',  
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
