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
   //Route::patch('misCitas', 'CitasController@index')->name('misCitas');
//Route::resource('Citas','CitasController@index');

//});
Route::group(['middleware' => 'App\Http\Middleware\PacienteMiddleware'], function()
{
    Route::get('/misCitas','CitasController@index')->name('misCitas');
    Route::resource('citas', 'CitasController');

    /*Route::post('/demands/create', 'DemandController@create')->name('demands.create');
    Route::get('/demands/{id}/edit', 'DemandController@edit')->name('demands.edit');
    Route::put('/demands/{id}', 'DemandController@update')->name('demands.update');
    Route::delete('/demands', 'DemandController@destroy')->name('demands.destroy');*/

});
Route::group(['middleware' => 'App\Http\Middleware\PersonalSanitarioMiddleware'], function()
{
    Route::get('/misObservaciones','ObservationController@index')->name('misObservaciones');
    Route::resource('observaciones', 'ObservationController');


});

Route::get('/misTratamientos','TreatmentController@index')->name('misTratamientos');
Route::resource('tratamientos', 'TreatmentController');


//Route::group(['middleware' => 'App\Http\Middleware\PacienteMiddleware'], function()
//{
    //Route::get('/Citas', 'CitasController@index')->name('Citas');

//});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


