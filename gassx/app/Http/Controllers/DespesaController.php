<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Util;
use App\Despesa;
use App\DespesaUser;

class DespesaController extends Controller
{
    //
    public function telaDespesas($user_id, $ma = '10/2018') {
        $dados['usuario'] = User::find($user_id);

        $data = explode('/', $ma);
        $mes = (int) $data[0];
        $ano =  (int) $data[1];

        $dados['tab_despesas_associacao'] = $this->tab_despesas_associacao($mes, $ano);
        $dados['tab_despesas_membro'] = $this->tab_despesas_membro($mes, $ano);
        $dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;

        return view('admin.telaDespesas', compact('dados'));
    }



     public function store(Request $request, $user_id){
        $dados['usuario'] = User::find($user_id);

        $data = explode('/', $request->all()['mes_ano']);
        $mes = (int) $data[0];
        $ano =  (int) $data[1];
        
        return view('admin.telaDespesas', compact('dados'));
    }

//////////////////////////////////////////s

    /**
        PAra retornar os dados necessários para preencher cada coluna da tabela despesas relativas à associação

    */
        //descrição, autor, data, valor
    public function tab_despesas_associacao($mes, $ano){
    

    }

     /**
        PAra retornar os dados necessários para preencher cada coluna da tabela despesas relativas aos membros em dado período

    */
        //descrição, membro, data,  valor
    public function tab_despesas_membro($mes, $ano){
        $tabela = [];
            $desps = DespesaUser::where('created_at', 'like', $ano.'-'.$mes.'%')->get(); //Despesas dado uma dada

            foreach ($desps as $key) {
                $linha['descricao'] = $key->despesa()->first()->descricao;
                $linha['membro'] = $key->user()->first()->name;
                $linha['data'] = $key->created_at;
                $linha['valor'] = $key->despesa()->first()->saida()->first()->valor;

                $tabela[] = $linha;
            }

        return $tabela;
    }
}
