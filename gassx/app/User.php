<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activo','codigo','name', 'email', 'password','saldo','foto','status','endereco_id', 'genero_id','contacto_id', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Retorna 
     *
     * @var array
     */
    public function acessos(){
        return $this->hasMany('App\Acesso');
    }

    /**
     * Retorna 
     *
     * @var array
     */
    public function gastoUsers(){
        return $this->hasMany('App\GastoUser');
    }


     /**
     * Retorna 
     *
     * @var array
     */
    public function privilegioUsers(){
        return $this->hasMany('App\PrivilegioUser');
    }


    /**
     * Retorna 
     *
     * @var array
     */
    public function despesaUsers(){
        return $this->hasMany('App\DespesaUser');
    }

    /**
     * Retorna 
     *
     * @var array
     */
    public function recargas(){
        return $this->hasMany('App\Recarga');
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
     * Retorna todos os eventos de um certo utilizador
     *
     * @var array
     */
    public function eventoUsers(){
        return $this->hasMany('App\EventoUser');
    }
   
    /**
     * Retorna o 'gênero no qual o utilizador está associado'
     *
     * @var array
     */
    public function genero(){
        return $this->belongsTo('App\Genero');
    }

    /**
     * Retorna o contacto do utilizador 
     *
     * @var array
     */
    public function contacto(){
        return $this->belongsTo('App\Contacto');
    }
}
