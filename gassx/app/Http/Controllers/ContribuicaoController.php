<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\User;
use App\UserContribuicao;
use App\ParceiroContribuicao;

class ContribuicaoController extends Controller
{
    //
    public function telaContribuicoes($user_id, $ma = '10/2018') {
    	$dados['usuario'] = User::find($user_id);
        

        $data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        $dados['tab_contribuicoes_parceiros_admin'] = $this->tab_contribuicoes_parceiros_admin($mes, $ano);
        $dados['tab_contribuicoes_membros_admin'] = $this->tab_contribuicoes_membros_admin($mes, $ano);
        $dados['numero_de_contribuicoes'] = $this->getTotais($mes, $ano)['a'];
        $dados['total_com_membros'] = $this->getTotais($mes, $ano)['b'];
        $dados['total_com_parceiros'] = $this->getTotais($mes, $ano)['c'];

        return view('admin.telaContribuicoes', compact('dados'));
    }


    public function store(Request $request, $user_id){
    	$dados['usuario'] = User::find($user_id);
    	
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
        return view('admin.telaContribuicoes', compact('dados'));
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

	/////////////////////////////////

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

