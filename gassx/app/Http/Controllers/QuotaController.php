<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class QuotaController extends Controller
{
    //
	function telaFinancas(){

		return view('admin.telaFinancas');
	}

	function telaQuotas(){
		$dados = [];
		$dados['pagamentos'] = Pagamento::all();
		
		foreach ($dados['pagamentos'] as $k) {
			// $dados['gastoUsers'][] = $k->gastoUser();
			$dados['quotaPagamentos'][] = $k->quotaPagamentos();
		}


		return view("admin.telaQuotas", compact('dados'));
	}

	// public function listar() {
 //        $eventos = Evento::all();
 //        return view("listar", compact('eventos'));
 //    }

}
