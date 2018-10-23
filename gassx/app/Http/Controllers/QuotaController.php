<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\User;
use App\ValorQuota;
use App\Multa;
use App\Util;

class QuotaController extends Controller{
	

// formatação da tela quotas do admn
	public function telaQuotas($user_id, $ma = '10/2018'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];


		$dados['tab_pagamentos_admin'] = $this->tab_pagamentos_admin($mes, $ano);
		$dados['est_pagamentos_admin'] = $this->est_pagamentos_admin($mes, $ano);
		$dados['tab_multas_admin'] = $this->tab_multas_admin($mes, $ano);
		$dados['tab_quota_valor_admin'] = $this->tab_quota_valor_admin($mes, $ano);
		$dados['valor_quota'] = $this->valorQuota($mes, $ano);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		
		
		return view("admin.telaQuotas", compact('dados'));
	}



	public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];


		$dados['tab_pagamentos_admin'] = $this->tab_pagamentos_admin($mes, $ano);
		$dados['est_pagamentos_admin'] = $this->est_pagamentos_admin($mes, $ano);
		$dados['tab_multas_admin'] = $this->tab_multas_admin($mes, $ano);
		$dados['valor_quota'] = $this->valorQuota($mes, $ano);
		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		
		
		return view("admin.telaQuotas", compact('dados'));
	}



	// about gastoUsers
	public function telaQuotasUser($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		
		return view("user.telaQuotas", compact('dados'));
	}

	/**

	*/
	public function store1(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('user.telaQuotas', compact('dados'));
	}

/////////////////////////////////////

	//codigo, membro, n_prestacoes, valor_multa, estado, data_pagamento || genero 
	public function tab_pagamentos_admin($mes, $ano){
		$tabela = [];
		$pags = Pagamento::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //pagamentos dado uma dada
		foreach ($pags as $key) {
			$linha['codigo'] = $key->gastoUser()->first()->user()->first()->codigo;
			$linha['membro'] = $key->gastoUser()->first()->user()->first()->name;
			$linha['data_pagamento'] = $key->created_at;
			$linha['valor_multa'] = $key->quotaPagamentos()->get()->first()->quota()->first()->multa()->first()->percentagem;
			$linha['n_prestacoes'] = $key->quotaPagamentos()->count();
			$linha['estado'] = 'pago';

			$linha['genero'] = $key->gastoUser()->get()->first()->user()->get()->first()->genero()->first()->descricao;

			$tabela[] = $linha;
		}

		return $tabela;
	}

	/**
		Retorna os dados sobre relatórios, para preencher o cabeçalho colorido, 
		Atenção que é sobre o mês e ano 
	*/
	public function est_pagamentos_admin($mes, $ano){
		$est = [];
		$pags = Pagamento::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //pagamentos dado uma dada

		$est['quotas_pagas'] = $pags->count();
		$est['pendentes'] = '0';
		$est['em_falta'] = '0';
		$est['pagos_com_multa'] = $this->pagosComMulta($pags);


		return $est;
	}

	/**
	Retorna os dados sobre relatórios, para preencher o cabeçalho colorido, 
	Atenção que é sobre o mês e ano 
	*/
	//dias, percentagem, status, 
	public function tab_multas_admin($mes, $ano){
		$linha = [];
		$mult = Multa::all(); //pagamentos dado uma dada

		foreach ($mult as $key) {
			$a['dias'] = $key->dias;
			$a['percentagem'] = $key->percentagem;
			$a['status'] = $key->ativo;

			$linha[] = $a;
		}

		return $linha;
	}


/**
	Retorna os dados sobre relatórios, para preencher o cabeçalho colorido, 
	Atenção que é sobre o mês e ano 
	*/
	//dias, percentagem, status, 
	public function tab_quota_valor_admin($mes, $ano){
		$linha = [];
		$mult = ValorQuota::all(); //pagamentos dado uma dada

		foreach ($mult as $key) {
			$a['de'] = $key->created_at;
			$a['ate'] = $key->updated_at;
			$a['status'] = $key->ativo;
			$a['valor'] = $key->valor;

			$linha[] = $a;
		}

		return $linha;
	}


function pagosComMulta($pags){
	$cont = 0;
	foreach ($pags as $key) {
		foreach ($key->quotaPagamentos()->get() as $ke) {
			if ($ke->quota()->first()->multa()->first()->percentagem != 0) {
				$cont++;
			}
		}
	}
	return $cont;
}

function valorQuota(){
	 $val = ValorQuota::where('ativo', '1')->get();
	 foreach ($val as $key) {
	 	$ultimo = $key;
	 }
	 return $ultimo->valor;
}
	

	

}
