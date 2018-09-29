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
    return view('devoluciones.test');
});
Route::get('/postventa', function () {
    return view('devoluciones.postventa');
});

Auth::routes();

Route::get('/ncomprobante/{comprobante}', 'RecursosController@getVentas')->name('getventa');
Route::post('/ncomprobante/{comprobante}', 'RecursosController@saveVentas')->name('saveventa');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('devoluciones','DevolucionController');
Route::resource('productos','ProductoController');
Route::resource('tickets','TicketController');
Route::resource('notas-credito','NotasCreditoController');
