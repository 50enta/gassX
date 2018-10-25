<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Util;
use App\Recarga;
use App\Endereco;
use App\Genero;
use App\Contacto;

class UserController extends Controller{
    

	public function telaUtilizadores($user_id, $ma = '0/0'){
        $dados['usuario'] = User::find($user_id);

        return view('admin.telaUtilizadores', compact('dados'));
    }




    public function telaPerfil($user_id, $ma = '10/2018'){
        $dados['usuario'] = User::find($user_id);

        $ma = date("m/Y/d"); 
        $data = explode('/', $ma);
        $mes = (int) $data[0];
        $ano =  (int) $data[1];

        $dados['tab_recargas_user'] = $this->tab_recargas_user($mes, $ano, $user_id);
        $dados['tab_gastos_user'] = $this->tab_gastos_user($mes, $ano, $user_id);
        $dados['avaliacao_user'] = $this->avaliacao_user($mes, $ano, $user_id);
        $dados['enderecos'] = Endereco::all();
        $dados['generos'] = Genero::all();

        $dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;


    	return view('user.telaPerfil', compact('dados'));
    }

    public function store(Request $request, $user_id){
		$dados['usuario'] = User::find($user_id);

		$data = explode('/', $request['mes_ano']);
        $mes = (int) $data[0];
        $ano =  (int) $data[1];

        $dados['tab_recargas_user']  = $this->tab_recargas_user($mes, $ano, $user_id);
        $dados['tab_gastos_user'] = $this->tab_gastos_user($mes, $ano, $user_id);
        $dados['avaliacao_user'] = $this->avaliacao_user($mes, $ano, $user_id);
        $dados['enderecos'] = Endereco::all();
        $dados['generos'] = Genero::all();

        $dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;


        return view('user.telaPerfil', compact('dados'));
	}
    


    public function salvarMembro(Request $req, $user_id){
        //salvando contacto
        $c = new Contacto();
        $c->numero = $req->all()['contacto'];

        $cont = Contacto::create(['numero' => $req->all()['contacto']]);


        $usu = User::find($user_id);

        $usu->name = $req->all()['name'];
        $usu->username = $req->all()['username'];
        $usu->genero_id = $req->all()['genero'];
        $usu->endereco_id = $req->all()['endereco'];
        // $usu->contacto_id = $cont->id;
        $usu->contacto()->associate($cont);
        $usu->email = $req->all()['email'];
        $usu->confirmado = true;
        $usu->obs = $req->all()['obs'];

       if ($usu->save()) {
             return redirect("/user/perfil/".$user_id)->with('message', "Sucesso!");
        } else{
            echo "Salvo sem sucesso";
        } 

      

    }

    ////////////////////////////////////////


    public function tab_recargas_user($mes, $ano, $user_id){
        $tabela = [];
            $recargas = Recarga::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //Despesas dado uma dada

            foreach ($recargas as $rec) {
               if($rec->user()->first()->id == $user_id){
                 $linha['data'] = $rec->created_at;
                 $linha['valor'] = $rec->valor;
                 $linha['observacao'] = '---';

                 $tabela[] = $linha;
               }
            }

        return $tabela;
    }

    public function tab_gastos_user($mes, $ano, $user_id){
          $tabela = [];
            $gastos = Recarga::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //Despesas dado uma dada

            foreach ($gastos as $rec) {
               if($rec->user()->first()->id == $user_id){
                 $linha['data'] = $rec->created_at;
                 $linha['valor'] = $rec->valor;
                 $linha['observacao'] = '---';

                 $tabela[] = $linha;
               }
            }

        return $tabela;
    }

    public function avaliacao_user($mes, $ano, $user_id){
        $tudo['quotas'] = 50;
        $tudo['contribuicoes'] = 50;
        $tudo['eventos'] = 50;

        return $tudo;
    }
}
