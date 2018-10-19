<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ParceiroController extends Controller
{
    //
    public function telaParceiros($user_id, $ma = '0/0') {
    	$dados['usuario'] = User::find($user_id);

       return view("admin.telaParceiros", compact('dados'));
    }
}
