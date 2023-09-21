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


Use App\Movimiento;

Route::get('/clientes/generarPdf', 'ClienteController@generarPdf')->name('clientes.generarPdf');

Route::resource('clientes', 'ClienteController');
Route::get('/clientes/{id}/destroy', 'ClienteController@destroy')->name('clientes.destroy');


Route::resource('cuentas', 'CuentaController');

Route::get('/cuentas/{id}/destroy', 'CuentaController@destroy')->name('cuentas.destroy');

Route::get('/movimientos/{cuenta}/create', 'MovimientoController@create')->name('movimientos.create');

Route::post('/movimientos/store', 'MovimientoController@store')->name('movimientos.store');


Route::get('/movimientos/{cuenta}/cuenta', 'MovimientoController@index')->name('movimientos.index');

Route::get('/movimientos/{movimiento}', 'MovimientoController@show')->name('movimientos.show');


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

