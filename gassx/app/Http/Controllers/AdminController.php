<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

     public function telaAdmin() {
        return view('admin.TelaAdmin');
    }
    public function telaListarEventosAdmin() {
        return view('admin.telaListarEventosAdmin');
    }
}
