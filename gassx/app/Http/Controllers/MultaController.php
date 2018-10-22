<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Multa;

class MultaController extends Controller
{
    //

    public function salvarMulta(Request $req, $user_id){
    	
    	if(Multa::create($req->all()))
    	 return redirect("/admin/quotas/".$user_id)->with('message', "Sucesso!");
    }
}
