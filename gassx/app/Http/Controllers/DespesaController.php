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
        $dados['tab_despesas_associacao'] = $this->tab_despesas_associacao($mes, $ano);
        $dados['total_com_associacao']  = $this->getTotais($mes, $ano)['associacao'];
        $dados['total_com_membros'] = $this->getTotais($mes, $ano)['membros'];
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

        
        $dados['tab_despesas_associacao'] = $this->tab_despesas_associacao($mes, $ano);
        $dados['tab_despesas_membro'] = $this->tab_despesas_membro($mes, $ano);
        $dados['tab_despesas_associacao'] = $this->tab_despesas_associacao($mes, $ano);
        $dados['total_com_associacao']  = $this->getTotais($mes, $ano)['associacao'];
        $dados['total_com_membros'] = $this->getTotais($mes, $ano)['membros'];
        $dados['data']['mes_int'] = $mes;
        $u = new Util();
        $dados['data']['mes_str'] = $u->getMes($mes);
        $dados['data']['ano'] = $ano;
        
        return view('admin.telaDespesas', compact('dados'));
    }

//////////////////////////////////////////s

    /**
        PAra retornar os dados necessários para preencher cada coluna da tabela despesas relativas à associação

    */
        //descrição, autor, data, valor
    public function tab_despesas_associacao($mes, $ano){
        $tabela = [];

        $despe = $this->getDespesasAssoc($mes, $ano);
        foreach ($despe as $key) {
            $linha['descricao'] = $key->descricao;
            $linha['autor'] = 'Indefinido';
            $linha['data'] = $key->created_at;
            $linha['valor'] = $key->saida()->first()->valor;

            $tabela[] = $linha;
        }
        return $tabela;
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

/**
    Retorna as depesas que pertencem à associação
*/
    public function getDespesasAssoc($mes, $ano){
        $ids = [];
         $desp_memb = DespesaUser::where('created_at', 'like', $ano.'-'.$mes.'%')->get();
         $desp_assoc = Despesa::where('created_at', 'like', $ano.'-'.$mes.'%')->get();
        foreach ($desp_memb as $key) {
            $ids[] = $key->despesa_id;
        }
        
        $retorno = [];
        foreach ($desp_assoc as $ke) {
            $falso = false;
            foreach ($ids as $k) {
                if($ke->id == $k){
                    $falso = true;
                }
            }
            if($falso == false){
                $retorno[] = $ke;
            }
        }
        return $retorno;
    }

/**
    Retornas um aaray dos totais das despesas pelos membros e pela associação prórpia
**/
    public function getTotais($mes, $ano){
        $total['membros'] = 0;
        $total['associacao'] = 0;

        $desp_memb = DespesaUser::where('created_at', 'like', $ano.'-'.$mes.'%')->get();

        foreach ($desp_memb as $key) {
            $total['membros'] += $key->despesa()->first()->saida()->first()->valor;
        }
        $desp_assoc = Despesa::where('created_at', 'like', $ano.'-'.$mes.'%')->get();
        foreach ($desp_assoc as $key) {
            $total['associacao'] += $key->saida()->first()->valor;
        }
        return $total;
    }


}
