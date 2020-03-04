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
//Route::view('/login','administrador/login')->name('login');

//Route::view('/registro','administrador/registro')->name('registro');
Route::view('/tipoDocumento','administrador/tipoDocumento')->name('tipoDocumento');
Route::view('/perfil_usuario','administrador/perfil_usuario')->name('perfil_usuario');


Route::post('mail','MailController@postMail');

Route::prefix('admin')->group(
  function(){
    Route::view('/crearTipodocumento','administrador/tipoDocumento')->name('crearTipodocumento');
    Route::post('/guardarTipoDocumento','admin\tipoController@guardarControlador')->name('guardarTipoDocumento');
    Route::view('/crearCaso','administrador/procesos-judiciales/registrarProcesoJudicial')->name('crearCaso');
    Route::view('/crearCliente','administrador/clientes/registrarCliente')->name('crearCliente');

    //CLIENTE
    Route::view('/crearCliente','administrador/clientes/registrarCliente')->name('crearCliente');
    Route::post('/agregarCliente','admin\clienteController@crearControlador')->name('agregarCliente');

    Route::get('/editarCliente/{numero}', 'admin\clienteController@clienteControlador')->name('editarCliente');
    Route::post('/actualizarCliente', 'admin\clienteController@editarControlador')->name('actualizarCliente');

    Route::get('/eliminarCliente/{numero}', 'admin\clienteController@eliminarControlador')->name('eliminarCliente');

    Route::get('/listarClientes', 'admin\clienteController@listarControlador')->name('listarClientes');
    Route::delete('/cliente/eliminarCliente/{numero}', 'clienteController@eliminarControlador');

    //UBICACIÓN-DUCMENTOS
    Route::view('/agregarUbicacion','administrador/ubicacion/agregarUbicacion')->name('agregarUbicacion');
    Route::post('/agregarUbicacionFisica','admin\ubicacionController@guardarControlador')->name('agregarUbicacionFisica');

    Route::get('/editarUbicacion/{id}','admin\ubicacionController@ubicacionControlador')->name('editarUbicacion');
    Route::post('/editarUbicacionFisica','admin\ubicacionController@editarControlador')->name('editarUbicacionFisica');

    Route::get('/eliminarUbicacion/{id}', 'admin\ubicacionController@eliminarControlador')->name('eliminarUbicacion');

    Route::get('/listarUbicacion','admin\ubicacionController@listarControlador')->name('listarUbicacion');

    //TIPO-DOCUMENTOS
    Route::view('/crearTipoDocumento','administrador/tipo-documentos/crearTipoDocumento')->name('crearTipoDocumento');
    Route::post('/agregarTipoDocumento','admin\clienteController@crearControlador')->name('agregarTipoDocumento');

    Route::get('/editarTipoDocumento{id}', 'admin\clienteController@clienteControlador')->name('editarTipoDocumento');
    Route::post('/tiposDocumentos', 'admin\clienteController@editarControlador')->name('tiposDocumentos');

    Route::get('/eliminarTipoDocumento/{id}', 'admin\clienteController@eliminarControlador')->name('eliminarTipoDocumento');

    Route::get('/listarTiposDocumentos', 'admin\clienteController@listarControlador')->name('listarTiposDocumentos');
    Route::delete('/tipoDocumento/eliminarTipoDocumento/{id}', 'clienteController@eliminarControlador');
  }
);

/* --- Rutas para CRUD de procesos judiciales */
/** Completar estas peticiones de un proceso judicial*/
Route::get('/procesoJudicial/actualizar/{radicado}', 'ProcesoJudicialController@actualizarProcesoJudicialVista');
Route::post('/procesoJudicial/actualizar/{radicado}', 'ProcesoJudicialController@actualizarProcesoJudicial');
Route::delete('/procesoJudicial/eliminar/{radicado}', 'ProcesoJudicialController@eliminarProcesoJudicial');

Route::view('/registrarProcesoJudicial', 'administrador/procesos-judiciales/registrarProcesoJudicial');
Route::view('/listarProcesosJudiciales', 'administrador/procesos-judiciales/listarProcesoJudicial');

Route::view('/registrarContraparte','administrador/clientes/registrarContraparte')->name('registrarContraparte');
Route::view('/listarContraparte','administrador/clientes/listarContraparte')->name('listarContraparte');

Route::view('/subirDocumento','administrador/procesos-judiciales/subirDocumento')->name('subirDocumento');


Route::view('/editarTipoDocumento','administrador/tipo-documentos/editarTipoDocumento')->name('editarTipoDocumento');
Route::view('/listarTiposDocumentos','administrador/tipo-documentos/listarTiposDocumentos')->name('listarTiposDocumentos');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
