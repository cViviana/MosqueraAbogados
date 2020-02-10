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
Route::view('/tipoDocumento','administrador/tipoDocumento')->name('tipoDocumento');
Route::view('/perfil_usuario','administrador/perfil_usuario')->name('perfil_usuario');

Route::post('mail','MailController@postMail');

Route::prefix('admin')->group(
  function(){
    Route::view('/crearTipodocumento','administrador/tipoDocumento')->name('crearTipodocumento');
    Route::post('/guardarTipoDocumento','admin\tipoController@guardarControlador')->name('guardarTipoDocumento');
  }
);


/* --- Rutas para CRUD de procesos judiciales */
Route::resource('/admin/registrar-proceso-judicial', 'admin\ProcesosJudiciales\ProcesoJudicialController');

Route::resource('/admin/registrarCliente', 'admin\ProcesosJudiciales\registrarClienteController');
Route::resource('/admin/registrarContraparte', 'admin\ProcesosJudiciales\registrarContraparteController');