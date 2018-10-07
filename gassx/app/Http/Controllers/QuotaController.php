<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotaController extends Controller
{
    //
	function telaFinancas(){

		return view('admin.telaFinancas');
	}

	function telaQuotas(){
		
		return view('admin.telaQuotas');
	}
}
