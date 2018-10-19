<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DespesaController extends Controller
{
    //
    public function telaDespesas($user_id, $ma = '0/0') {
        $dados['usuario'] = User::find($user_id);
        return view('admin.telaDespesas', compact('dados'));
    }

     public function store(Request $request, $user_id){
        $dados['usuario'] = User::find($user_id);

        $data = explode('/', $request['mes_ano']);
        $mes = (int) $data[0];
        $ano =  (int) $data[1];
        
        return view('admin.telaDespesas', compact('dados'));
    }



    
}
