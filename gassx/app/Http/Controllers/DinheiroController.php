<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinheiroController extends Controller
{
    //
    public function telaEntrSaidas() {
        return view('admin.telaEntrSaidas');
    }
}
