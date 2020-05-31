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

    Route::resource('misObservacionesPaciente', 'ObservationController');
    Route::get('/tratamientosPaciente','TreatmentController@indexPaciente')->name('tratamientosPaciente');
    Route::get('/verTratamientos','TreatmentController@show')->name('verTratamientos');
    Route::get('/misEmbarazos','PregnancyController@indexPaciente')->name('misEmbarazos');
    Route::get('/verEmbarazo/{embarazo}','PregnancyController@show')->name('verEmbarazo');
});
Route::group(['middleware' => 'App\Http\Middleware\PersonalSanitarioMiddleware'], function()
{
    Route::get('/citasPersonal','CitasController@indexPersonalSanitario')->name('citasPersonal');
    Route::put('/editarCitasPersonal/{appointment}','CitasController@updatePersonal')->name('editarCitasPersonal');
    Route::get('/editarCitasPersonal/{appointment}','CitasController@editPersonal')->name('editarCitasPersonal');
    Route::delete('/editarCitasPersonal/{appointment}','CitasController@destroyPersonal')->name('editarCitasPersonal');
    Route::resource('tratamientos', 'TreatmentController');
    Route::post('/createPersonalSanitario','CitasController@storePersonal')->name('createPersonalSanitario');
    Route::get('/createPersonalSanitario','CitasController@createPersonalSanitario')->name('createPersonalSanitario');

    Route::resource('embarazos', 'PregnancyController');
    Route::get('/pacientes','PacienteController@index')->name('pacientes');
    Route::get('/verObs','PacienteController@show')->name('verObs');
    Route::get('/observacionesPersonal/{id}','ObservationController@indexPersonal')->name('observacionesPersonal');
    Route::get('/tratamientosPersonal/{id}','TreatmentController@indexPersonal')->name('tratamientosPersonal');
    Route::get('/embarazosPersonal/{id}','PregnancyController@indexPersonal')->name('embarazosPersonal');
    Route::get('/donantes','DonationController@index')->name('donantes');
    Route::resource('donacion', 'DonationController');
    Route::get('/verDonacion/{id}','DonationController@show')->name('verDonacion');
    Route::get('/medicamento/{id}','MedicamentController@index')->name('medicamento');
    Route::resource('crearMedicamento', 'MedicamentController');
    Route::get('/verMedicamentos/{id}','PacienteController@showmedtrat')->name('verMedicamentos');
    Route::get('/createMedicament/{id}','AsociacionController@createTreatment')->name('createMedicament');

    Route::resource('citasdonantes', 'CitasDonantesController');
    Route::get('/createMedicament/{asociacione}','AsociacionController@destroy')->name('createMedicament');

});
Route::resource('asociacion', 'AsociacionController');

Route::get('/asociacionPorTreatment/{id}','AsociacionController@asociacionPorTreatment')->name('asociacionPorTreatment');
Route::get('/asociacionPorTreatmentPac/{id}','AsociacionController@asociacionPorTreatmentPac')->name('asociacionPorTreatmentPac');
Route::get('/misObservaciones','ObservationController@index')->name('misObservaciones');
Route::resource('observaciones', 'ObservationController');
Route::get('/verObservaciones','ObservationController@show')->name('verObservaciones');

Route::get('/observacionesPaciente','ObservationController@indexPaciente')->name('observacionesPaciente');

Route::group(['middleware' => 'App\Http\Middleware\DonanteMiddleware'], function(){


    Route::get('/misResultadosDonacion','DonationController@indexDonante')->name('misResultadosDonacion');
    Route::get('/verResultados/{result}','DonationController@show')->name('verResultados');
    Route::get('/crearCitaDonante','CitasDonantesController@createDonante')->name('crearCitaDonante');
    Route::post('/storeCitaDonante','CitasDonantesController@storeDonante')->name('storeCitaDonante');
    Route::get('/misCitasDonante','CitasDonantesController@indexDonante')->name('misCitasDonante');
    Route::put('/editarCitasPersonalDonante/{appointment}','CitasDonantesController@updateDonante')->name('editarCitasPersonalDonante');
    Route::get('/editarCitasPersonalDonante/{appointment}','CitasDonantesController@editDonante')->name('editarCitasPersonalDonante');
    Route::delete('/editarCitasPersonalDonante/{appointment}','CitasDonantesController@destroyDonante')->name('editarCitasPersonalDonante');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


