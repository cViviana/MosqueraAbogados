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
    return view('home');
});

Route::view('/nosotros','/nosotros')->name('nosotros');

Route::view('/servicios','/servicios')->name('servicios');

Route::view('/profesionales','/profesionales')->name('profesionales');

Route::view('/noticias','/noticias')->name('noticias');

Route::view('/noticia-1','/noticia-1')->name('noticia-1');

Route::view('/contacto','/contacto')->name('contacto');

Route::view('/login','administrador/login')->name('login');

Route::view('/registro','administrador/registro')->name('registro');

Route::prefix('admin')->group(
  function(){
    Route::view('/crearTipodocumento','administrador/tipoDocumento')->name('crearTipodocumento');
    Route::post('/guardarTipoDocumento','admin\tipoController@guardarControlador')->name('guardarTipoDocumento');
  }
);
