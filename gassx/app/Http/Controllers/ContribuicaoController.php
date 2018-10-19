<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\User;

class ContribuicaoController extends Controller
{
    //
    public function telaContribuicoes($user_id, $ma = '0/0') {
    	$dados['usuario'] = User::find($user_id);
        
        return view('admin.telaContribuicoes', compact('dados'));
    }


    public function store(Request $request, $user_id){
    	$dados['usuario'] = User::find($user_id);
    	
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaQuotas', compact('dados'));
	}




    // about gastoUsers
	public function telaContribuicoesUser($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['pagamentos'] = Pagamento::all();
		
		foreach ($dados['pagamentos'] as $k) {
			// $dados['gastoUsers'][] = $k->gastoUser();
			$dados['quotaPagamentos'][] = $k->quotaPagamentos();
		}
		return view("user.telaContribuicoes", compact('dados'));
	}

	public function store1(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaContribuicoes', compact('dados'));
	}

}

