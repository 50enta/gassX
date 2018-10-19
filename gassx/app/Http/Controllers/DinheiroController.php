<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DinheiroController extends Controller
{


    public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('admin.telaFinancas', compact('dados'));
	}

   
}
