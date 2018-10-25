<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Saida;
use App\Entrada;
use App\Util;

class DinheiroController extends Controller
{


	//
	function telaFinancas($user_id, $ma = '10/2018'){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
		
		$dados['tab_saidas_admin'] = $this->tab_saidas_admin($mes, $ano);
		$dados['tab_entradas_admin'] = $this->tab_entradas_admin($mes, $ano);
		$dados['valor_total_saidas']= $this->total_saidas($mes, $ano)['valor'];
		$dados['numero_total_saidas']= $this->total_saidas($mes, $ano)['numero'];

		$dados['valor_total_entradas']= $this->total_entradas($mes, $ano)['valor'];
		$dados['numero_total_entradas']= $this->total_entradas($mes, $ano)['numero'];


		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		
		return view("admin.telaFinancas", compact('dados'));
	}


    public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
		
		$dados['tab_saidas_admin'] = $this->tab_saidas_admin($mes, $ano);
		$dados['tab_entradas_admin'] = $this->tab_entradas_admin($mes, $ano);
		$dados['valor_total_saidas']= $this->total_saidas($mes, $ano)['valor'];
		$dados['numero_total_saidas']= $this->total_saidas($mes, $ano)['numero'];

		$dados['valor_total_entradas']= $this->total_entradas($mes, $ano)['valor'];
		$dados['numero_total_entradas']= $this->total_entradas($mes, $ano)['numero'];


		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		
		return view("admin.telaFinancas", compact('dados'));
	}

  ////////////////////////////////////////////////////////////////

	public function tab_saidas_admin ($mes, $ano){
		$tabela=[];
		$saidas = Saida::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //saidas dado uma dada

		foreach ($saidas as $key ) {
		$linha ['data'] =$key->created_at;
		$linha ['valor'] =$key->valor;	
		$linha ['autor'] = '-';	

		$tabela[] = $linha;
	}
		return $tabela;	
	}

	public function tab_entradas_admin ($mes, $ano){
		$tabela=[];
		$entradas = Entrada::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //entradas dado uma dada

		foreach ($entradas as $key ) {
		$linha ['data'] =$key->created_at;
		$linha ['valor'] =$key->valor;	
		$linha ['autor'] = '-';	

		$tabela[] = $linha;
	}
		return $tabela;	
	}

	public function total_saidas($mes, $ano){

		$tabela['valor']=0;
		$tabela['numero']=0;
		$saidas = Saida::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //saidas dado uma dada

		foreach ($saidas as $key ) {
			$tabela['valor'] += $key->valor;
			$tabela['numero']++;
		}
		return $tabela;	
	}


	public function total_entradas($mes, $ano){

		$tabela['valor']=0;
		$tabela['numero']=0;
		$entradas = Entrada::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //saidas dado uma dada

		foreach ($entradas as $key ) {
			$tabela['valor'] += $key->valor;
			$tabela['numero']++;
		}
		return $tabela;	
	}
}
