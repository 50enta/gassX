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
    Route::get('/quotas/{user_id}/{ma?}', 'PagamentoController@telaQuotasUser');
    Route::post('/atualizarQuotas/{user_id}', 'PagamentoController@store1');
    Route::get('/contribuicoes/{user_id}/{ma?}', 'ContribuicaoController@telaContribuicoesUser');
    Route::post('/atualizarContribuicoes/{user_id}', 'ContribuicaoController@store1');
    Route::get('/todosEventos/{user_id}/{ma?}', 'EventoController@telaTodosEventos');
    Route::post('/atualizarTodosEventos/{user_id}',  'EventoController@store'); 
    Route::get('/meusEventos/{user_id}/{ma?}',  'EventoController@telaMeusEventos');
    Route::post('/atualizarMeusEventos/{user_id}',  'EventoController@store1'); 
    Route::get('/detalhesTodosEvento_user/{user_id}/{evento_id}/', 'EventoUserController@telaDetalhesTodosEvento_user');
    Route::get('/detalhesMeusEvento_user/{user_id}/{evento_id}/', 'EventoUserController@telaDetalhesMeusEvento_user');
   


    Route::post('/salvarContribuicao/{user_id}',  'UserContribuicaoController@salvarContribuicao');
    Route::post('/salvarPagamento/{user_id}',  'PagamentoController@salvarPagamento');
    Route::post('/salvarMembro/{user_id}',  'UserController@salvarMembro');
    Route::get('salvarParticipacao/{user_id}/{evento_id}', 'EventoUserController@salvarParticipacao');
    Route::get('cancelarParticipacao/{user_id}/{evento_id}', 'EventoUserController@cancelarParticipacao');
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
    Route::get('/detalhesEvento_admin/{user_id}/{evento_id}/', 'EventoController@telaDetalhesEvento_admin'); 
    Route::post('/atualizarDetalhesEvento_admin/{evento_id}/{user_id}','EventoController@atualizarDetalhesEvento_admin');
    Route::get('/outros/{user_id}/{ma?}', 'Controller@telaOutros');  


    Route::post('/salvarMulta/{user_id}', 'MultaController@salvarMulta'); 
    Route::post('/salvarValorQuota/{user_id}', 'ValorQuotaController@salvarValorQuota');
    Route::post('/salvarEvento/{user_id}',  'EventoController@salvarEvento');
     Route::post('/salvarParceiro/{user_id}', 'ParceiroController@salvarParceiro'); 
    
    
});


