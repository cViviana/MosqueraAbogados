<?php

namespace App\Http\Controllers\admin\ProcesosJudiciales;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clienteController extends Controller
{

    public function create(Request $request)
    {
        $obj = Cliente::find($request->numero);
        if($obj == null){
            $objCliente = new Cliente($request->all());
            $objCliente->guardar($objCliente);
            //return view('administrador.procesos-judiciales.registrarCliente');
        }else{
            dd("error, el id ya se encuentra registrado");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $listaCliente=Cliente::all();
        // se envia el array a la vista desde aqui del controlador no desde la ruta web
        return view('administrador.procesos-judiciales.registrar-proceso-judicial')->with('clientes',$listaCliente);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $objCliente = Cliente::find($request->numero);
        if($objCliente != null){
            $objCliente = Cliente::fill($request->all());
            $objCliente->editar($objCliente);
        }else{
            dd("Error, el numero de indentificación es incorrecto");
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $objCliente = Cliente::find($request->numero);
        if($objCliente != null){
            $objCliente->eliminar($objCliente);
        }else{
            dd("Error, el numero de indentificación es incorrecto");
        }
    }
}
