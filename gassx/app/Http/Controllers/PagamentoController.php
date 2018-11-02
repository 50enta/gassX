<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;
use App\GastoUser;
use App\Saida;
use App\Dinheiro;
use App\Entrada;
use App\User;
use App\ValorQuota;
use App\Multa;
use App\Util;
use App\Quota;
use App\QuotaPagamento;
use App\Ano;
use App\Mes;

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
		$dados['tab_historico_pagamentos'] = $this->tab_historico_pagamentos($mes, $ano, $user_id);
		$dados['tab_pagamentos_do_ano'] = $this->tab_pagamentos_do_ano($ano, $user_id);
		$dados['meses'] = Mes::all();
		$dados['anos'] = Ano::all();

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
		
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
		$dados['quotas_ano'] = $this->getQuotasUser($ano, $user_id);
		$dados['tab_historico_pagamentos'] = $this->tab_historico_pagamentos($mes, $ano, $user_id);
		$dados['tab_pagamentos_do_ano'] = $this->tab_pagamentos_do_ano($ano, $user_id);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;
        
        return view('user.telaQuotas', compact('dados'));
	}



	public function salvarPagamento(Request $req, $user_id){
	
		$gasto_user = GastoUser::create([
			'user_id' => $user_id,
			// 'valor' => $req->all()['demo0'], 	 
								]);
		$user = User::find($user_id);
		$user->saldo -= $req->all()['demo0'];
		$user->save();

		$dinheiro = Dinheiro::create(['valor' => $req->all()['demo0']]);

		$entrada = Entrada::create(['valor' => $req->all()['demo0'], 
									'dinheiro_id' => $dinheiro->id ]);

		$pagamento = Pagamento::create(['entrada_id' => $entrada->id, 
									'gasto_user_id' =>$gasto_user->id ]);

		$quota = Quota::create(['mes_id' => $req->all()['mes'], 
								'ano_id' => $req->all()['ano'], 
								'multa_id' => 2 ,
								'valor_quota_id' => 4]);

		$quota_pag = QuotaPagamento::create(['pagamento_id' => $pagamento->id, 
											'quota_id' => $quota->id]);

		if(!empty($quota_pag)){
			 return redirect("/user/quotas/".$user_id)->with('message', "Sucesso!");
		} else{
			echo "Erro";
		}
	}


	//////////////////////////////

	public function tab_historico_pagamentos($mes, $ano, $user_id){
		$tabela = [];

		//pegar um ano e pegar todas quotas 
		$ano = Ano::where('ano',$ano)->get()->first();
		$quotas = $ano->quotas();

		return $quotas;
		// return $tabela;
	}

	public function tab_pagamentos_do_ano($ano, $user_id){
		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$me = (int) $data[0];
		$an =  (int) $data[1];

		$tabela = [];
		$u = new Util();

		$todosMeses = Mes::all();
		$c = 1;
		foreach ($todosMeses  as $key) {
			
			$achou = false;
			$linha = [];
			foreach ($this->getQuotasUser($ano, $user_id) as $k) {
				if ($key->mes == $k->mes()->first()->mes) {
					$linha['mes'] = $u->getMes($key->id);
					$linha['estado'] = 'pago';
					$linha['multa'] = $k->multa()->first()->percentagem;
					$achou = true;
				}
			}
			if (!$achou) {
					$linha['mes'] = $u->getMes($key->id);
					$linha['estado'] = 'não';
					$linha['multa'] = '0';
			}
			$tabela[] = $linha;
			if ($ano == $an && $c == $me) {
				break;
			}
			$c++;
		}
		return $tabela;
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

		// return $pagsDoUser;

		//filtrando as quotas do pagamento
		$todasQuotas = [];
		
		foreach ($pagsDoUser as $q) {
			if(!empty($q->quotaPagamentos()->first())){
				$todasQuotas[] = $q->quotaPagamentos()->first()->quota()->first();
			}
			
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
