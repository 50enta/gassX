<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'mensagem', 'likes','evento_id',
    ];

     /**
     * Retorna o 
     *
     * @var array
     */
    public function evento(){
        return $this->belongsTo('App\Evento');
    }


}
