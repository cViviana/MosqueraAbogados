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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de los procesos que realiza el administrador.
Route::prefix('admin')->group(
  function(){

    Route::view('/perfil_usuario','administrador/perfil_usuario')->name('perfil_usuario')->middleware('permiso:vista');

    //CASO
    Route::get('/registrarCaso','admin\casoController@index')->name('registrarCaso')->middleware('permiso:crear');
    Route::post('/agregarCaso','admin\casoController@guardar')->name('crearCaso')->middleware('permiso:crear');
    
    Route::get('/listarCasos', 'admin\casoController@listarControlador')->name('listarCasos')->middleware('permiso:vista');
    Route::get('/editarCaso/{radicado}', 'admin\casoController@editControlador')->name('editarCaso')->middleware('permiso:editar');
    Route::post('/actualizarCaso', 'admin\casoController@editarControlador')->name('actualizarCaso')->middleware('permiso:editar');

    //USUARIOS
    Route::view('/registrarUsuario', 'administrador/usuarios/registro')->name('registrarUsuario')->middleware('permiso:crear');
    Route::post('/guardarUsuario', 'admin\userController@guardarControlador')->name('guardarUsuario')->middleware('permiso:crear');

    //CORREGIR
    Route::get('/editarUsuario/{cedula}/{destino}', 'admin\userController@userControlador')->name('editarUsuario')->middleware('permiso:editar');
    Route::post('/actualizarUsuario', 'admin\userController@actualizarControlador')->name('actualizarUsuario')->middleware('permiso:editar');

    Route::get('/buscarUsuario/{cedula}/{destino}','admin\userController@userControlador')->name('buscarUsuario')->middleware('permiso:editar');

    Route::post('/asignarRol', 'admin\userController@asignarRol')->name('asignarRol')->middleware('permiso:crear');

    Route::get('/eliminarUsuario/{cedula}', 'admin\userController@eliminarControlador')->name('eliminarUsuario')->middleware('permiso:eliminar');

    Route::get('/listarUsuarios', 'admin\userController@listarControlador')->name('listarUsuarios')->middleware('permiso:vista');

    //CLIENTE
    Route::get('/registrarCliente', function () {
      return view('administrador/clientes/registrarCliente');
     })->name('registrarCliente')->middleware('permiso:crear');
    //Route::view('/registrarCliente', 'administrador/clientes/registrarCliente')->name('registrarCliente');
    Route::post('/agregarCliente','admin\clienteController@crearControlador')->name('agregarCliente')->middleware('permiso:crear');

    Route::get('/editarCliente/{numero}', 'admin\clienteController@editControlador')->name('editarCliente')->middleware('permiso:editar');
    Route::post('/actualizarCliente', 'admin\clienteController@editarControlador')->name('actualizarCliente')->middleware('permiso:editar');

    Route::get('/eliminarCliente/{numero}/{roll}', 'admin\clienteController@eliminarControlador')->name('eliminarCliente')->middleware('permiso:eliminar');

    Route::get('/listarClientes/{roll}', 'admin\clienteController@listarControlador')->name('listarClientes')->middleware('permiso:vista');
    //Route::delete('/cliente/eliminarCliente/{numero}', 'admin\clienteController@eliminarControlador')->middleware('permiso:vista');

    //CONTRAPARTE
    Route::get('/registrarContraparte', function () {
      return view('administrador/clientes/registrarContraparte');
    })->name('registrarContraparte')->middleware('permiso:crear');

    Route::post('/agregarContraparte','admin\clienteController@crearControlador')->name('agregarContraparte')->middleware('permiso:crear');
    Route::get('/listarContraparte{roll}','admin\clienteController@listarControlador')->name('listarContraparte')->middleware('permiso:vista');

    //UBICACIÓN-DUCMENTOS
    Route::view('/agregarUbicacion','administrador/ubicacionFisica/agregarUbicacion')->name('agregarUbicacion')->middleware('permiso:crear');
    Route::post('/agregarUbicacionFisica','admin\ubicacionController@guardarControlador')->name('agregarUbicacionFisica')->middleware('permiso:crear');

    Route::get('/editarUbicacion/{id}','admin\ubicacionController@ubicacionControlador')->name('editarUbicacion')->middleware('permiso:editar');
    Route::post('/editarUbicacionFisica','admin\ubicacionController@editarControlador')->name('editarUbicacionFisica')->middleware('permiso:editar');

    Route::get('/eliminarUbicacion/{id}', 'admin\ubicacionController@eliminarControlador')->name('eliminarUbicacion')->middleware('permiso:eliminar');

    Route::get('/listarUbicaciones','admin\ubicacionController@listarControlador')->name('listarUbicaciones')->middleware('permiso:vista');

    //TIPO-DOCUMENTOS
    Route::view('/crearTipo','administrador/tipo-documentos/crearTipoDocumento')->name('crearTipoDocumento')->middleware('permiso:crear');

    Route::post('/agregarTipoDocumento','admin\tipoController@guardarControlador')->name('agregarTipoDocumento')->middleware('permiso:crear');

    Route::get('/editarTipoDocumento/{id}', 'admin\tipoController@tipoControlador')->name('editarTipoDocumento')->middleware('permiso:editar');
    Route::post('/editarTipo', 'admin\tipoController@editarControlador')->name('editarTipo')->middleware('permiso:editar')->middleware('permiso:editar');

    Route::get('/eliminarTipoDocumento/{id}', 'admin\tipoController@eliminarControlador')->name('eliminarTipoDocumento')->middleware('permiso:eliminar');

    Route::get('/listarTiposDocumentos', 'admin\tipoController@listarControlador')->name('listarTiposDocumentos')->middleware('permiso:vista');

    //Documentos
    Route::get('/listarDocumentos','admin\documento_controller@listarPorRadicado')->name('listarDocumentos')->middleware('permiso:vista');
    Route::get('/listarDocumentos/{radicado_doc}','admin\documento_controller@listarControlador')->name('listarDocumentosRadicado')->middleware('permiso:vista');
    Route::get('/subirDocumento','admin\documento_controller@index')->name('subirDocumento')->middleware('permiso:editar');
    Route::view('/tipoDocumento','administrador/tipoDocumento')->name('tipoDocumento')->middleware('permiso:editar');
    Route::get('/verDocumento/{id}','admin\documento_controller@verDocumento')->name('verDocumento')->middleware('permiso:vista');
    Route::get('/editarDocumento/{id}','admin\documento_controller@editarDocumento')->name('editarDocumento')->middleware('permiso:editar');
    Route::post('/guardarDocumento','admin\documento_controller@guardarControlador')->name('guardarDocumento')->middleware('permiso:crear');
    Route::post('/actualizarDocumento','admin\documento_controller@actualizarDocumento')->name('actualizarDocumento')->middleware('permiso:editar');
    Route::get('/eliminarDocumento/{id}','admin\documento_controller@eliminarDocumento')->name('eliminarDocumento')->middleware('permiso:eliminar');

  });
