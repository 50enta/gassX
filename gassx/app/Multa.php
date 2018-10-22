<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ativo', 'percentagem', 'dias' ,
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
