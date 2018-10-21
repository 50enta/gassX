<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function telaOutros() {
        return view('admin.telaOutros');
    }
 	

 	public function telaInicio($user_id) {
 		
 		$usuario = User::find($user_id);
        
 		$dados['usuario'] =  $usuario;
 		
        return view('principal', compact('dados'));
    }

  


}
