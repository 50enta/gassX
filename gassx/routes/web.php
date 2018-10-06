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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas do utilizador
Route::get('/principal', function () {
    return view('minton.inicio');
});

Route::get('/eventos/todosEventos', function () {
    return view('user.telaTodosEventos');
});
Route::get('/eventos/meusEventos', function () {
    return view('user.telaMeusEventos');
});
Route::get('/contas', function () {
    return view('user.TelaContas');
});



// rotas do admin
Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@telaAdmin');
    Route::get('/financas', 'QuotaController@telaFinancas');
    Route::get('/eventos', 'EventoController@telaEventos'); 
    Route::get('/contribuicoes', 'ContribuicaoController@telaContribuicoes'); 
    Route::get('/despesas', 'DespesaController@telaDespesas'); 
    Route::get('/entrSaidas', 'DinheiroController@telaEntrSaidas');
    Route::get('/outros', 'Controller@telaOutros');  
    Route::get('/parceiros', 'ParceiroController@telaParceiros'); 
    Route::get('/quotas', 'QuotaController@telaQuotas'); 
    Route::get('/utilizadores', 'UserController@telaUtilizadores'); 
});

Route::get('/a', function () {
    return view('admin.telaAdmin');
});