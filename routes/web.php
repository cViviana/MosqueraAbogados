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
    Route::get('/crearCaso','admin\ProcesosJudiciales\clienteController@show')->name('crearCaso');
    Route::view('/crearCliente','administrador/clientes/registrarCliente')->name('crearCliente');
  
    //CLIENTE
    Route::view('/crearCliente','administrador/clientes/registrarCliente')->name('crearCliente');
    Route::post('/agregarCliente','admin\ProcesosJudiciales\clienteController@crearControlador')->name('agregarCliente');

    //Route::view('/editarCliente', 'admnistrador/clientes/editarCliente')->name('editarCliente');
    //Route::post('/actualizarCliente', 'admin\ProcesosJudiciales\clienteController@editarControlador')->name('actualizarControlador');

    //Route::view('/eliminarCliente', 'administrador/clientes/eliminarCliente')->name('eliminarCliente');
    //Route::post('/suprimirCliente', 'admin\ProcesosJudiciales\clienteController@eliminarControlador')->name('suprimirCliente');

    Route::get('/listarClientes', 'admin\ProcesosJudiciales\clienteController@listarControlador')->name('listarClientes');
    Route::get('/cliente/actualizarDatosCliente/{numero}', 'clienteController@editarControlador');
    Route::delete('/cliente/eliminarCliente/{numero}', 'clienteController@eliminarControlador');
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
Route::view('/agregarUbicacion','administrador/agregarUbicacion')->name('agregarUbicacion');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
