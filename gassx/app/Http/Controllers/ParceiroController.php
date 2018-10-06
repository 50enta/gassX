<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParceiroController extends Controller
{
    //
    public function telaParceiros() {
        return view('admin.telaParceiros');
    }
}
