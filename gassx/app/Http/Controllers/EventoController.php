<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EventoController extends Controller
{


	public function telaEventos($user_id, $ma = '0/0') {
    	$dados['usuario'] = User::find($user_id);
    	
       return view("admin.telaEventos", compact('dados'));
    }

    
	public function telaTodosEventos($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		return view("user.telaTodosEventos", compact('dados'));
	}



	public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

        return view('user.telaMeusEventos', compact('dados'));
	}



	public function telaMeusEventos($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		
		
		return view("user.telaMeusEventos", compact('dados'));
	}



	public function store1(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaMeusEventos', compact('dados'));
	}


//detalhes evento
	public function telaDetalhesEvento_user($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
		
		return view("user.telaDetalhesEvento_user", compact('dados'));
	}



	public function store2(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaDetalhesEvento_user', compact('dados'));
	}



	public function telaDetalhesEvento_admin($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
		
		return view("admin.telaDetalhesEvento_admin", compact('dados'));
	}



	public function store3(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
 
        return view('admin.telaDetalhesEvento_admin', compact('dados'));
	}
}