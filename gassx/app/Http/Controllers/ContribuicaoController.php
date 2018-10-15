<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class ContribuicaoController extends Controller
{
    //
    public function telaContribuicoes() {
        return view('admin.telaContribuicoes');
    }

    public function store(Request $request){
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaQuotas', compact('dados'));
	}




    // about gastoUsers
	public function telaContribuicoesUser($ma = '0/0'){
		$dados = [];

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

	public function store1(Request $request){
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaContribuicoes', compact('dados'));
	}

}
