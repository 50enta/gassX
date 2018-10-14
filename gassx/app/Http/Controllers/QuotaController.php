<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class QuotaController extends Controller
{
    //
	function telaFinancas(){

		return view('admin.telaFinancas');
	}

	


	public function telaQuotas($ma = '0/0'){
		$dados = [];

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['pagamentos'] = Pagamento::all();
		
		foreach ($dados['pagamentos'] as $k) {
			// $dados['gastoUsers'][] = $k->gastoUser();
			$dados['quotaPagamentos'][] = $k->quotaPagamentos();
		}
		return view("admin.telaQuotas", compact('dados'));
	}



	public function store(Request $request){
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('admin.telaQuotas', compact('dados'));
	}



	// about gastoUsers
	public function telaQuotasUser($ma = '0/0'){
		$dados = [];

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['pagamentos'] = Pagamento::all();
		
		foreach ($dados['pagamentos'] as $k) {
			// $dados['gastoUsers'][] = $k->gastoUser();
			$dados['quotaPagamentos'][] = $k->quotaPagamentos();
		}
		return view("user.telaQuotas", compact('dados'));
	}

	public function store1(Request $request){
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaQuotas', compact('dados'));
	}


}
