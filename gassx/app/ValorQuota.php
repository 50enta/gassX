<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorQuota extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'valor', 'dataInicio' , 'dataFim',
    ];

      /**
     * Retorna 
     *
     * @var array
     */
    public function valorQuota(){
        return $this->hasOne('App\ValorQuota');
    }
}
