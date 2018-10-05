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

Route::get('/eventos', function () {
    return view('user.TelaEvento');
});


// rotas do admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@telaAdmin');
    Route::get('/eventos', 'AdminController@telaListarEventosAdmin'); 
});

