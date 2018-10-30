<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dinheiro;
use App\Entrada;
use App\Contribuicao;
use App\GastoUser;
use App\UserContribuicao;


class UserContribuicaoController extends Controller
{
    

	public function salvarContribuicao(Request $req, $user_id){

		$dinheiro = Dinheiro::create(['valor' => $req->all()['valor']]);

		$entrada = Entrada::create(['valor' => $req->all()['valor'], 
									'dinheiro_id' => $dinheiro->id ]);

		$contr = Contribuicao::create(['descricao' => $req->all()['descricao'], 
									'entrada_id' =>$entrada->id ]);

		$gasto_user = GastoUser::create(['user_id' => $user_id]);

		$user_contr = UserContribuicao::create(['gasto_user_id' => $gasto_user->id, 
												'contribuicao_id' => $contr->id]);

		if(!empty($user_contr)){
			 return redirect("/user/contribuicoes/".$user_id)->with('message', "Sucesso!");
		} else{
			echo "Erro";
		}

	} 

}
