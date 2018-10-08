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


//algumas rotas do user
Route::group(['prefix' => 'user'], function () {
    Route::get('/perfil', 'UserController@telaPerfil');
    
});

// rotas do admin
Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@telaAdmin');
    Route::get('/financas', 'QuotaController@telaFinancas');
     Route::post('/atualizarFinancas', 'DinheiroController@store');
    Route::get('/eventos', 'EventoController@telaEventos'); 
    Route::get('/contribuicoes', 'ContribuicaoController@telaContribuicoes'); 
    Route::get('/despesas', 'DespesaController@telaDespesas'); 
    Route::get('/outros', 'Controller@telaOutros');  
    Route::get('/parceiros', 'ParceiroController@telaParceiros'); 
    Route::get('/quotas/{ma?}', 'QuotaController@telaQuotas'); 
    Route::post('/atualizarQuotas', 'QuotaController@store');
    Route::get('/utilizadores', 'UserController@telaUtilizadores'); 
});

Route::get('/a', function () {
    return view('admin.telaAdmin');
});