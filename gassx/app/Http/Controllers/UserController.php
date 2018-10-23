<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{
    

	public function telaUtilizadores($user_id, $ma = '0/0'){
        $dados['usuario'] = User::find($user_id);

        return view('admin.telaUtilizadores', compact('dados'));
    }




    public function telaPerfil($user_id, $ma = '0/0'){
        $dados['usuario'] = User::find($user_id);

    	return view('user.telaPerfil', compact('dados'));
    }

    public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaPerfil', compact('dados'));
	}
    

}
