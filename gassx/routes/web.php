 <?php
<<<<<<< HEAD
=======


 
>>>>>>> 3db53902de4abfb98fc41b118ff1aa5331ad3139
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

// rotas do admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@telaAdmin');
    Route::get('/eventos', 'AdminController@telaListarEventosAdmin'); 
});

Route::get('/principal', function () {
    return view('minton.inicio');
});