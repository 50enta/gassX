<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function telaEventos() {
    	
        return view('admin.telaEventos');
    }
}
