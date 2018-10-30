<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Evento;


class EventoUserController extends Controller
{
    //

    public function telaDetalhesTodosEvento_user($user_id, $evento_id){
		$dados['usuario'] = User::find($user_id);
		$dados['evento'] = Evento::find($evento_id);

		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		return view("user.telaDetalhesTodosEvento_user", compact('dados'));
	}

	public function telaDetalhesMeusEvento_user($user_id, $evento_id){
		$dados['usuario'] = User::find($user_id);

		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		return view("user.telaDetalhesTodosEvento_user", compact('dados'));
	}


	public function salvarParticipacao($user_id, $evento_id){

		$evu = EventoUser::create(['user_id' => $user_id, 
									'evento_id' => $evento_id]);

		if (!empty($evu)) {
             return redirect("/user/todosEventos/".$user_id)->with('message', "Sucesso!");
        } else{
            echo "Salvo sem sucesso";
        }

	}

	public function cancelarParticipacao($user_id, $evento_id){


	}


}
