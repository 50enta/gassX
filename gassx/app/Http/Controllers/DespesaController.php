<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespesaController extends Controller
{
    //
    public function telaDespesas() {
        return view('admin.telaDespesas');
    }
}
