<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\User;
use App\UserContribuicao;
use App\ParceiroContribuicao;
use App\Util;
use App\Contribuicao;
use App\UserContribuicaoEvento;

class ContribuicaoController extends Controller{
    //
    public function telaContribuicoes($user_id, $ma = '10/2018') {
    	$dados['usuario'] = User::find($user_id);
        
    	$ma = date("m/Y/d");
        $data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        $dados['tab_contribuicoes_parceiros_admin'] = $this->tab_contribuicoes_parceiros_admin($mes, $ano);
        $dados['tab_contribuicoes_membros_admin'] = $this->tab_contribuicoes_membros_admin($mes, $ano);
        $dados['numero_de_contribuicoes'] = $this->getTotais($mes, $ano)['a'];
        $dados['total_com_membros'] = $this->getTotais($mes, $ano)['b'];
        $dados['total_com_parceiros'] = $this->getTotais($mes, $ano)['c'];

         $dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;

        return view('admin.telaContribuicoes', compact('dados'));
    }


    public function store(Request $request, $user_id){
    	$dados['usuario'] = User::find($user_id);
    	
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        $dados['tab_contribuicoes_parceiros_admin'] = $this->tab_contribuicoes_parceiros_admin($mes, $ano);
        $dados['tab_contribuicoes_membros_admin'] = $this->tab_contribuicoes_membros_admin($mes, $ano);
        $dados['numero_de_contribuicoes'] = $this->getTotais($mes, $ano)['a'];
        $dados['total_com_membros'] = $this->getTotais($mes, $ano)['b'];
        $dados['total_com_parceiros'] = $this->getTotais($mes, $ano)['c'];

 		$dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;

        return view('admin.telaContribuicoes', compact('dados'));
	}




    // about gastoUsers
	public function telaContribuicoesUser($user_id, $ma = '10/2018'){
		$dados['usuario'] = User::find($user_id);

		$ma = date("m/Y/d");
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['tab_contribuicoes_user'] = $this->tab_contribuicoes_user($mes, $ano, $user_id);
		$dados['numero_contribuicoes'] = $this->getTotaisUser($mes, $ano, $user_id)['b'];
		$dados['total_gastos_contribuicoes'] = $this->getTotaisUser($mes, $ano, $user_id)['a'];

		$dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;
		
		return view("user.telaContribuicoes", compact('dados'));
	}

	public function store1(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['tab_contribuicoes_user'] = $this->tab_contribuicoes_user($mes, $ano, $user_id);
		$dados['numero_contribuicoes'] = $this->getTotaisUser($mes, $ano, $user_id)['b'];
		$dados['total_gastos_contribuicoes'] = $this->getTotaisUser($mes, $ano, $user_id)['a'];

		$dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;
		
		return view("user.telaContribuicoes", compact('dados'));
	}



	/////////////////////////////////


	//Descrição, Tipo contribuíção, Data da contribuição, Valor
	function getTotaisUser($mes, $ano, $user_id){
		$tabela['a'] = 0;
		$tabela['b'] = 0;
		$todasContrs = UserContribuicao::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); 
		$todasContrs1 = UserContribuicaoEvento::where('created_at', 'like', $ano.'-'.$mes.'%')->get();

		$contrs = [];
		foreach ($todasContrs as $uc) {
			if($uc->gastoUser()->first()->user()->first()->id == $user_id){
				$contrs[] = $uc;
			}
		}

		foreach ($contrs as $key) {
			$tabela['a']  += $key->contribuicao()->first()->entrada()->first()->valor;
			$tabela['b']++;
			
		}
		
		////Em relação à eventos
		$contrs1 = [];
		foreach ($todasContrs1 as $ucv) {
			if($ucv->gastoUser()->first()->user()->first()->id == $user_id){
				$contrs1[] = $ucv;
			}
		}

		foreach ($contrs1 as $ke) {
			
			$tabela['a']  += $ke->contribuicaoEvento()->first()->valor;
			$tabela['b']++;
		}

		return $tabela;
	}

	//Retorna os totais 
	function tab_contribuicoes_user($mes, $ano, $user_id){
		$tabela = [];
		$todasContrs = UserContribuicao::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); 
		$todasContrs1 = UserContribuicaoEvento::where('created_at', 'like', $ano.'-'.$mes.'%')->get();

		$contrs = [];
		foreach ($todasContrs as $uc) {
			if($uc->gastoUser()->first()->user()->first()->id == $user_id){
				$contrs[] = $uc;
			}
		}

		foreach ($contrs as $key) {
			$linha['descricao'] = $key->contribuicao()->first()->descricao;
			$linha['tipo_contribuicao'] = 'Associacao';
			$linha['data'] = $key->created_at;
			$linha['valor'] = $key->contribuicao()->first()->entrada()->first()->valor;

			$tabela[] = $linha;
		}
		
		////Em relação à eventos
		$contrs1 = [];
		foreach ($todasContrs1 as $ucv) {
			if($ucv->gastoUser()->first()->user()->first()->id == $user_id){
				$contrs1[] = $ucv;
			}
		}

		foreach ($contrs1 as $ke) {
			$linha['descricao'] = $ke->contribuicaoEvento()->first()->descricao;
			$linha['tipo_contribuicao'] = 'Evento';
			$linha['data'] = $ke->created_at;
			$linha['valor'] = $ke->contribuicaoEvento()->first()->valor;
			
			$tabela[] = $linha;
		}

		return $tabela;
	}

	/**
		Todas contribuíções dos parceiros
	*/
	public function tab_contribuicoes_parceiros_admin($mes, $ano){
		$tabela = [];
		$cont_parc = ParceiroContribuicao::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //Cont dado uma dada

		foreach ($cont_parc as $key) {
			$linha['descricao'] = $key->contribuicao()->first()->descricao;
			$linha['tipo'] = 'Asociação';
			$linha['parceiro'] = $key->parceiro()->first()->descricao; //faltam atributos ta tabela parceiro
			$linha['data'] = $key->created_at;
			$linha['valor'] = $key->contribuicao()->first()->entrada()->first()->valor;
			

			$tabela[] = $linha;
		}
		return $tabela;
	}

	/**
		Todas contribuíções dos membros
	*/
	public function tab_contribuicoes_membros_admin($mes, $ano){
		$tabela = [];
		$cont_usr = UserContribuicao::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //Cont dado uma dada

		foreach ($cont_usr as $key) {
			$linha['descricao'] = $key->contribuicao()->first()->descricao;
			$linha['tipo'] = 'Associacao';
			$linha['membro'] = $key->gastoUser()->first()->user()->first()->name;
			$linha['data'] = $key->created_at;
			$linha['valor'] = $key->contribuicao()->first()->entrada()->first()->valor;
			

			$tabela[] = $linha;
		}
		return $tabela;
		return $tabela;
	}

	public function getTotais($mes, $ano){
		$total['a'] = 0;
		$total['b'] = 0;
		$total['c'] = 0;
		$cont_parc = ParceiroContribuicao::where('created_at', 'like', $ano.'-'.$mes.'%')->get();
		$cont_usr = UserContribuicao::where('created_at', 'like', $ano.'-'.$mes.'%')->get();

		foreach ($cont_usr as $key) {
			$total['b'] += $key->contribuicao()->first()->entrada()->first()->valor;
			$total['a']++;
		}

		foreach ($cont_parc as $key) {
			$total['c'] += $key->contribuicao()->first()->entrada()->first()->valor;
			$total['a']++;
		}
		return $total;
	}


}

