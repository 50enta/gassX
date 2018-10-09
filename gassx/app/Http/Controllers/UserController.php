<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

	public function telaUtilizadores() {
        return view('admin.telaUtilizadores');
    }


    public function telaPerfil(){

    	return view('user.telaPerfil');
    }

    public function store(Request $request){
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('admin.telaQuotas', compact('dados'));
	}
}
