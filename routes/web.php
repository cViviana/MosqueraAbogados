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

Route::post('mail','MailController@postMail');

//ROLES
Route::view('/asignarRoll', 'auth/rol')->name('asignarRoll');


//Rutas de los procesos que realiza el administrador.
Route::prefix('admin')->group(
  function(){

    Route::view('/perfil_usuario','administrador/perfil_usuario')->name('perfil_usuario');

    //CASO
    Route::get('/registrarCaso','admin\casoController@index')->name('registrarCaso');
    Route::post('/agregarCaso','admin\casoController@guardar')->name('crearCaso');
    //Route::view('/listarCasos','administrador/procesos-judiciales/listarProcesoJudicial')->name('listarCasos');
    Route::get('/listarCasos', 'admin\casoController@listarControlador')->name('listarCasos');

    //CLIENTE
    Route::get('/registrarCliente', function () {
      return view('administrador/clientes/registrarCliente');
     })->name('registrarCliente');
    //Route::view('/registrarCliente', 'administrador/clientes/registrarCliente')->name('registrarCliente');
    Route::post('/agregarCliente','admin\clienteController@crearControlador')->name('agregarCliente');

    Route::get('/editarCliente/{numero}', 'admin\clienteController@editControlador')->name('editarCliente');
    Route::post('/actualizarCliente', 'admin\clienteController@editarControlador')->name('actualizarCliente');

    Route::get('/eliminarCliente/{numero}', 'admin\clienteController@eliminarControlador')->name('eliminarCliente');

    Route::get('/listarClientes', 'admin\clienteController@listarControlador')->name('listarClientes');
    Route::delete('/cliente/eliminarCliente/{numero}', 'admin\clienteController@eliminarControlador');

    //UBICACIÓN-DUCMENTOS
    Route::view('/agregarUbicacion','administrador/ubicacionFisica/agregarUbicacion')->name('agregarUbicacion');
    Route::post('/agregarUbicacionFisica','admin\ubicacionController@guardarControlador')->name('agregarUbicacionFisica');

    Route::get('/editarUbicacion/{id}','admin\ubicacionController@ubicacionControlador')->name('editarUbicacion');
    Route::post('/editarUbicacionFisica','admin\ubicacionController@editarControlador')->name('editarUbicacionFisica');

    Route::get('/eliminarUbicacion/{id}', 'admin\ubicacionController@eliminarControlador')->name('eliminarUbicacion');

    Route::get('/listarUbicaciones','admin\ubicacionController@listarControlador')->name('listarUbicaciones');

    //TIPO-DOCUMENTOS
    Route::view('/crearTipo','administrador/tipo-documentos/crearTipoDocumento')->name('crearTipoDocumento');

    Route::post('/agregarTipoDocumento','admin\tipoController@guardarControlador')->name('agregarTipoDocumento');

    Route::get('/editarTipoDocumento/{id}', 'admin\tipoController@tipoControlador')->name('editarTipoDocumento');
    Route::post('/editarTipo', 'admin\tipoController@editarControlador')->name('editarTipo');

    Route::get('/eliminarTipoDocumento/{id}', 'admin\tipoController@eliminarControlador')->name('eliminarTipoDocumento');

    Route::get('/listarTiposDocumentos', 'admin\tipoController@listarControlador')->name('listarTiposDocumentos');

  }
);

/* --- Rutas para CRUD de procesos judiciales */
/** Completar estas peticiones de un proceso judicial*/
//Route::get('/procesoJudicial/actualizar/{radicado}', 'ProcesoJudicialController@actualizarProcesoJudicialVista');
//Route::post('/procesoJudicial/actualizar/{radicado}', 'ProcesoJudicialController@actualizarProcesoJudicial');
//Route::delete('/procesoJudicial/eliminar/{radicado}', 'ProcesoJudicialController@eliminarProcesoJudicial');

Route::view('/registrarContraparte','administrador/clientes/registrarContraparte')->name('registrarContraparte');
Route::view('/listarContraparte','administrador/clientes/listarContraparte')->name('listarContraparte');

Route::view('/subirDocumento','administrador/procesos-judiciales/subirDocumento')->name('subirDocumento');
Route::view('/tipoDocumento','administrador/tipoDocumento')->name('tipoDocumento');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
