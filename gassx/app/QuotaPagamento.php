<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotaPagamento extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'pagamento_id', 'quota_id' ,
    ];


	 /**
     * Retorna o 
     *
     * @var array
     */
    public function quota(){
        return $this->belongsTo('App\Quota');
    }

    /**
     * Retorna o 
     *
     * @var array
     */
    public function pagamento(){
        return $this->belongsTo('App\Pagamento');
    }
}
