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
    return view('usuario-general/home');
});
Route::view('/nosotros','usuario-general/nosotros')->name('nosotros');
Route::view('/servicios','usuario-general/servicios')->name('servicios');
Route::view('/profesionales','usuario-general/profesionales')->name('profesionales');
Route::view('/noticias','usuario-general/noticias')->name('noticias');
Route::view('/noticia-1','usuario-general/noticia-1')->name('noticia-1');
Route::view('/contacto','usuario-general/contacto')->name('contacto');
Route::view('/login','administrador/login')->name('login');

Route::view('/registro','administrador/registro')->name('registro');

Route::view('/perfil','administrador/perfil')->name('perfil');

Route::view('/registrarCliente','administrador/procesos-judiciales/registrarCliente')->name('registrarCliente');
Route::view('/registrarContraparte','administrador/procesos-judiciales/registrarContraparte')->name('registrarContraparte');


Route::post('mail','MailController@postMail');

Route::prefix('admin')->group(
  function(){
    Route::view('/crearTipodocumento','administrador/tipoDocumento')->name('crearTipodocumento');
    Route::post('/guardarTipoDocumento','admin\tipoController@guardarControlador')->name('guardarTipoDocumento');
  }
);


/* --- Rutas para CRUD de procesos judiciales */
Route::resource('/admin/registrar-proceso-judicial', 'admin\ProcesosJudiciales\ProcesoJudicialController');