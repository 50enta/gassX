<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Endereco;
use App\Parceiro;

class ParceiroController extends Controller
{
    //
    public function telaParceiros($user_id, $ma = '0/0') {
    	$dados['usuario'] = User::find($user_id);

    	$dados['enderecos'] = Endereco::all();
    	$dados['parceiros'] = $this->lista_todos_parceiros();

       return view("admin.telaParceiros", compact('dados'));
    }

    public function salvarParceiro(Request $request, $user_id){
    	$parc = Parceiro::create([
    				'nome' => $request->all()['nome'],
    				'descricao' => $request->all()['descricao'],
    				'codigo' => $request->all()['codigo'],
    				'endereco_id' => $request->all()['endereco'],
    	]);
    	if(!empty($parc)){
			 return redirect("/admin/parceiros/".$user_id)->with('message', "Sucesso!");
		} else{
			echo "Erro";
		}
    }



	function lista_todos_parceiros(){
		$matriz = [];

		$evs = Parceiro::all();

		$linha = 1;
		$coluna = 1;
		foreach ($evs as $key) {
			$matriz[$linha][$coluna] = $key;
			if ($coluna == 4) {
				$linha++;
				$coluna = 0;
			}
			$coluna++;
		}
		return $matriz;
	} 
}
