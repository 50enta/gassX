<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo', 'descricao', 'objectivo', 'valorAContribuir','dataInicio','dataFim', 
        'endereco_id', 'categoria_id', 
    ];

	/**
     * Retorna 
     *
     * @var array
     */
    public function comentarios(){
        return $this->hasMany('App\Comentario');
    }

	/**
     * Retorna o 
     *
     * @var array
     */
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }

     /**
     * Retorna o 
     *
     * @var array
     */
    public function endereco(){
        return $this->belongsTo('App\Endereco');
    }

    /**
     * Retorna 
     *
     * @var array
     */
    public function eventoUsers(){
        return $this->hasMany('App\EventoUser');
    }
}
