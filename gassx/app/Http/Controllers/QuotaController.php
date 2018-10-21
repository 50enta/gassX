<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\User;

class QuotaController extends Controller
{
    //
	function telaFinancas($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);
		
		return view("admin.telaFinancas", compact('dados'));
	}

	

// formatação da tela quotas do admn
	public function telaQuotas($user_id, $ma = '10/2018'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];


		$dados['tab_pagamentos_admin'] = $this->tab_pagamentos_admin($mes, $ano);
		$dados['est_pagamentos_admin'] = $this->est_pagamentos_admin($mes, $ano);
		$dados['tab_multas_admin'] = $this->tab_multas_admin($mes, $ano);
		$dados['data']['mes_int'] = $mes;
		$dados['data']['mes_str'] = $this->getMes($mes);
		$dados['data']['ano'] = $ano;
		
		
		return view("admin.telaQuotas", compact('dados'));
	}



	public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];


        
        return view('admin.telaQuotas', compact('dados'));
	}



	// about gastoUsers
	public function telaQuotasUser($user_id, $ma = '0/0'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		// $dados['pagamentos_admin'] = $this->getPagamentos_admin($mes, $ano);
		$dados['data']['mes_int'] = $mes;
		$dados['data']['mes_str'] = $this->getMes($mes);
		$dados['data']['ano'] = $ano;
		
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
			$linha['codigo'] = $key->gastoUser()->get()->first()->user()->get()->first()->codigo;
			$linha['membro'] = $key->gastoUser()->first()->user()->first()->name;
			$linha['data_pagamento'] = $key->created_at;
			$linha['valor_multa'] = $key->quotaPagamentos()->first()->quota()->first()->multa()->first()->percentagem;
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
		$est['pagos_com_multa'] = '0';


		return $est;
	}

	/**
	Retorna os dados sobre relatórios, para preencher o cabeçalho colorido, 
	Atenção que é sobre o mês e ano 
	*/
	public function tab_multas_admin($mes, $ano){
		$def = [];
		$pags = Pagamento::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //pagamentos dado uma dada

		//
		//meter no $def os dados sobre as configs e tal
		//

		return $def;
	}

	
/**
	retorna o mês correspondente ao 
	valor passado por parâmento
*/
public function getMes($mes_int){
	switch ($mes_int) {
		case '1':
			return 'Janeiro';
			break;
		case '2':
			return 'Fevereiro';
			break;
		case '3':
			return 'Março';
			break;
		case '4':
			return 'Abril';
			break;
		case '5':
			return 'Maio';
			break;
		case '6':
			return 'Junho';
			break;
		case '7':
			return 'Julho';
			break;
		case '8':
			return 'Agosto';
			break;
		case '9':
			return 'Setembro';
			break;
		case '10':
			return 'Outubro';
			break;
		case '11':
			return 'Novembro';
			break;
		case '12':
			return 'Dezembro';
			break;
		default:
			return 'Indefinido';
			break;
	}
}
}
