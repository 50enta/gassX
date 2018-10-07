<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContribuicaoController extends Controller
{
    //
    public function telaContribuicoes() {
        return view('admin.telaContribuicoes');
    }
}
