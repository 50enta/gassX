 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotas gerais
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/principal/{user_id}', 'Controller@telaInicio');



//algumas rotas do user
Route::group(['prefix' => 'user'], function () {
    Route::get('/perfil/{user_id}/{ma?}', 'UserController@telaPerfil');
    Route::post('/atualizarPerfil/{user_id}', 'UserController@store');
    Route::get('/quotas/{user_id}/{ma?}', 'QuotaController@telaQuotasUser');
    Route::post('/atualizarQuotas/{user_id}', 'QuotaController@store1');
    Route::get('/contribuicoes/{user_id}/{ma?}', 'ContribuicaoController@telaContribuicoesUser');
    Route::post('/atualizarContribuicoes/{user_id}', 'ContribuicaoController@store1');
    Route::get('/todosEventos/{user_id}/{ma?}', 'EventoController@telaTodosEventos');
    Route::post('/atualizarTodosEventos/{user_id}',  'EventoController@store'); 
    Route::get('/meusEventos/{user_id}/{ma?}',  'EventoController@telaMeusEventos');
    Route::post('/atualizarMeusEventos/{user_id}',  'EventoController@store1'); 
    Route::get('detalhesEvento/{user_id}/{ma?}', 'EventoController@telaDetalhesEvento');
    Route::post('/atualizarDetalhesEvento/{user_id}',  'EventoController@store2');

    
});


// rotas do admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/financas/{user_id}/{ma?}', 'DinheiroController@telaFinancas'); //
    Route::post('/atualizarFinancas/{user_id}', 'DinheiroController@store');
    Route::get('/contribuicoes/{user_id}/{ma?}', 'ContribuicaoController@telaContribuicoes'); 
    Route::post('/atualizarContribuicoes/{user_id}', 'ContribuicaoController@store'); 
    Route::get('/despesas/{user_id}/{ma?}', 'DespesaController@telaDespesas'); 
    Route::post('/atualizarDespesas/{user_id}', 'DespesaController@store');
    Route::get('/quotas/{user_id}/{ma?}', 'QuotaController@telaQuotas'); 
    Route::post('/atualizarQuotas/{user_id}', 'QuotaController@store');    
    Route::get('/utilizadores/{user_id}/{ma?}', 'UserController@telaUtilizadores'); 
    Route::get('/parceiros/{user_id}/{ma?}', 'ParceiroController@telaParceiros'); 
    Route::get('/eventos/{user_id}/{ma?}', 'EventoController@telaEventos'); 
    Route::get('/outros/{user_id}/{ma?}', 'Controller@telaOutros');  


    Route::post('/salvarMulta/{user_id}/{ma?}', 'MultaController@salvarMulta'); 
    Route::post('/salvarValorQuota/{user_id}/{ma?}', 'ValorQuotaController@salvarValorQuota');
    
});


