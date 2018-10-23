<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ValorQuota;

class ValorQuotaController extends Controller
{
 

    function salvarValorQuota(Request $req, $user_id){

    	if(ValorQuota::create($req->all()))
    	 return redirect("/admin/quotas/".$user_id)->with('message', "Sucesso!");
    }
}
