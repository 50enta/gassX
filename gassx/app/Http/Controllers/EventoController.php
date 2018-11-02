<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Util;
use App\Evento;
use App\EventoUser;
use App\Endereco;
use App\Categoria;

class EventoController extends Controller{


	//admin
	public function telaEventos($user_id, $ma = '0/0') {
    	$dados['usuario'] = User::find($user_id);
    	
    	$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['categorias'] = Categoria::all();
		$dados['enderecos'] = Endereco::all();

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;

       return view("admin.telaEventos", compact('dados'));
    }

    
    //user
	public function telaTodosEventos($user_id, $ma = '10/2018'){
		$dados['usuario'] = User::find($user_id);

		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['lista_todos_eventos'] = $this->lista_todos_eventos($mes, $ano);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;

		return view("user.telaTodosEventos", compact('dados'));
	}



	public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['lista_todos_eventos'] = $this->lista_todos_eventos($mes, $ano);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;

        return view('user.telaTodosEventos', compact('dados'));
	}



	public function telaMeusEventos($user_id, $ma = '10/2018'){
		$dados['usuario'] = User::find($user_id);

		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['lista_meus_eventos'] = $this->lista_meus_eventos($mes, $ano, $user_id);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;
		
		return view("user.telaMeusEventos", compact('dados'));
	}



	public function store1(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];

		$dados['lista_meus_eventos'] = $this->lista_meus_eventos($mes, $ano, $user_id);

		$dados['data']['mes_int'] = $mes;
		$u = new Util();
		$dados['data']['mes_str'] = $u->getMes($mes);
		$dados['data']['ano'] = $ano;
		$dados['util'] = $u;
        
        return view('user.telaMeusEventos', compact('dados'));
	}



	public function telaDetalhesEvento_admin($user_id, $evento_id){
		$dados['usuario'] = User::find($user_id);

		$ma = date("m/Y/d"); 
		$data = explode('/', $ma);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
		
		return view("admin.telaDetalhesEvento_admin", compact('dados'));
	}



	public function store3(Request $request, $user_id, $evento_id){
		$dados['usuario'] = User::find($user_id);
		
		$data = explode('/', $request->all()['mes_ano']);
		$mes = (int) $data[0];
		$ano =  (int) $data[1];
        
 
        return view('admin.telaDetalhesEvento_admin', compact('dados'));
	}


	public function salvarEvento(Request $req, $user_id){

		$dI = isset($req->all()['dataInicio'])?  explode('/', $req->all()['dataInicio']) :  explode('/',date("Y/m/d"));
		$daI = $dI[2].'-'.$dI[1].'-'.$dI[0];			

		$dF = isset($req->all()['dataFim'])?  explode('/', $req->all()['dataFim']) :  explode('/',date("Y/m/d"));
		$daF = $dF[2].'-'.$dF[1].'-'.$dF[0];

		$ev = Evento::create(['descricao' => $req->all()['descricao'], 
									'endereco_id' => $req->all()['endereco'],
									'categoria_id' => $req->all()['categoria'],
									'objectivo' => $req->all()['objectivo'],
									'valorAContribuir' => $req->all()['valorAContribuir'],
									'fechado' => false,
									'decorreu' => false,
									'dataInicio' =>  $daI.' 20:36:36',
									'dataFim' => $daF.' 20:36:36' 
							 ]);

		if(!empty($ev)){
			 return redirect("/admin/eventos/".$user_id)->with('message', "Sucesso!");
		} else{
			echo "Erro";
		}
	}

	//////////////////////////////////////////////////

	function lista_todos_eventos($mes, $ano){
		$matriz = [];

		$evs = Evento::where('created_at', 'like', $ano.'-'.$mes.'%')->get();

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



	function lista_meus_eventos($mes, $ano, $user_id){
		$matriz = [];
		$evs = [];

		$evs = Evento::where('created_at', 'like', $ano.'-'.$mes.'%')->get();


		// $todos = [];
		// foreach ($evs as $k) {
		// 	foreach ($k->eventoUsers() as $ki) {
		// 		if($ki->user()->first()->id == $user_id){
		// 			$todos[] = $ki->evento();
		// 		}
		//   }
		// }


		foreach ($evs as $key) {
			$vetor = [];
			for ($i=1; $i <= 4; $i++) { 
				$vetor[] = $key;
			}
			$matriz[] = $vetor;
		}

		return $matriz;
	}


}