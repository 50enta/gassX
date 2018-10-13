<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinheiroController extends Controller
{


    public function store(Request $request){
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('admin.telaFinancas', compact('dados'));
	}

   
}
