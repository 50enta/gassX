<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespesaController extends Controller
{
    //
    public function telaDespesas() {
        return view('admin.telaDespesas');
    }

     public function store(Request $request){
        
        $data = explode('/', $request['mes_ano']);
        $mes = (int) $data[0];
        $ano =  (int) $data[1];
        
        return view('admin.telaDespesas', compact('dados'));
    }
}
