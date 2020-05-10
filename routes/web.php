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

//});
Route::group(['middleware' => 'App\Http\Middleware\PacienteMiddleware'], function()
{
    Route::get('/misCitas','CitasController@index')->name('misCitas');

    Route::resource('citas', 'CitasController');
    Route::get('/observacionesPaciente','ObservationController@indexPaciente')->name('observacionesPaciente');
    Route::resource('misObservacionesPaciente', 'ObservationController');
    Route::get('/tratamientosPaciente','TreatmentController@indexPaciente')->name('tratamientosPaciente');
    Route::get('/verTratamientos','TreatmentController@show')->name('verTratamientos');
});
Route::group(['middleware' => 'App\Http\Middleware\PersonalSanitarioMiddleware'], function()
{


    //Route::get('/misTratamientos','TreatmentController@create')->name('misTratamientos');
    //Route::resource('tratamientos', 'TreatmentController');
    Route::get('/citasPersonal','CitasController@indexPersonalSanitario')->name('citasPersonal');
    //Route::delete('/borrarCita','CitasController@destroy')->name('borrarCita');
    //Route::get('/editCita','CitasController@edit')->name('editCita');
    //Route::get('/misTratamientos','TreatmentController@indexPersonalSanitario')->name('misTratamientos');
    Route::resource('tratamientos', 'TreatmentController');
    Route::post('/createPersonalSanitario','CitasController@storePersonal')->name('createPersonalSanitario');
    Route::get('/createPersonalSanitario','CitasController@createPersonalSanitario')->name('createPersonalSanitario');
    Route::resource('embarazos', 'PregnancyController');
});

//Route::get('/misTratamientos','TreatmentController@index')->name('misTratamientos');
//Route::resource('tratamientos', 'TreatmentController');

Route::get('/misObservaciones','ObservationController@index')->name('misObservaciones');
Route::resource('observaciones', 'ObservationController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


