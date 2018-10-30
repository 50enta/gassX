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
    public function quotas(){
        return $this->hasMany('App\Quota');
    }
}
