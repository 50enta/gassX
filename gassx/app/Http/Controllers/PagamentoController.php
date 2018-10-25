<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\User;
use App\ValorQuota;
use App\Multa;
use App\Util;
use App\quotaPagamento;

class PagamentoController extends Controller
{
    


	// about gastoUsers
	public function telaQuotasUser($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['quotas_ano'] = $this->getQuotasUser($ano, $user_id);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;

		
		return view("user.telaQuotas", compact('dados'));
	}

	/**

	*/
	public function store1(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;
        
        return view('user.telaQuotas', compact('dados'));
	}


	//////////////////////////////


	public function tab_pagamentos_do_ano($ano, $user_id){
		
		// $linha['mes'] = 'Jane';
		// $linha['estado'] = 'pago';
		// $linha['multa'] = '69';
	}


	public function getQuotasUser($ano, $user_id){
		$lista = [];

		$pagsDoUser = [];
		$todosPags = Pagamento::all();

		foreach ($todosPags as $p) {
			$id = $p->gastoUser()->first()->user()->first()->id;
			if($id == $user_id){
				$pagsDoUser[] = $p;
			}
		}

		$todasQuotas = [];
		//filtrando as quotas do pagamento
		foreach ($pagsDoUser as $q) {
			$todasQuotas[] = $q->quotaPagamentos()->first()->quota()->first();
			
		}


		$quotasAno = [];

		foreach ($todasQuotas as $qa) {
			if ($ano == $qa->ano()->first()->ano) {
				$quotasAno[] = $qa;
			}
			
		}

		return $quotasAno;

	}
}
