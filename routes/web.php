<?php

use Illuminate\Support\Facades\Route;

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
//Route::resource('Pacientes', 'PacienteController');
//Route::resource('Personal Sanitario', 'PersonalSanitarioController');
//Route::resource('Citas', 'CitasController');
//Route::get('/misCitas','CitasController@index')->name('misCitas');
//Route::group(['middleware' => 'App\Html\Middleware\PacienteMiddleware.php'], function(){
  //  Route::patch('misCitas', 'CitasController@index')->name('misCitas');
//Route::resource('misCitas','CitasController@index');

//});
//Route::group(['middleware' => 'App\Http\Middleware\PacienteMiddleware'], function()
//{
    Route::get('/Citas', 'CitasController@index')->name('Citas');

//});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


