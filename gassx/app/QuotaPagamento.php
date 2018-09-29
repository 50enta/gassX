<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotaPagamento extends Model
{
    //

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
