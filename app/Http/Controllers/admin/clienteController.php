<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\valFormRegCliente;

class clienteController extends Controller
{

    //para permitir conbinar el controlador con la contraparte debe dirigirse a el perfil la vista

    public function crearControlador(valFormRegCliente $request){
        $mensaje = "";
        $aux = $this->buscar($request->numero);
        if( $aux == null ){
            $objCliente = new Cliente($request->all());
            $objCliente->guardar($objCliente);
            $mensaje = "Éxito. ". $request->nombre ." con identificación ".
                        $request->numero ." ha sido registrado.";
            session()->flash('mensajeDeRegistroClienteExitoso',  $mensaje);
            return view('administrador.clientes.listarClientes', ['Clientes' => $this->listar()]);
        }else{
            $mensaje = "Ya existe la identificación ". $request->numero ." del cliente ".
                        $request->nombre;
            session()->flash('mensajeExisteIdentificacionCliente',  $mensaje);
        } 
        return view('administrador.clientes.registrarCliente');
    }

    public function editarControlador(valFormRegCliente $request){
        $objCliente = $this->buscar($request->numero);
        if($objCliente != null){
            $objCliente->fill($request->all());
            $objCliente->guardar($objCliente);
            $men = "El cliente se actualizo de forma satisfactoria";
        }else
            $men = "El identificador del cliente no existe";
        return view ("administrador.clientes.listarClientes", ['men' => $men, 'Clientes' => $this->listar()]  );
    }

    public function eliminarControlador($numero){
        $objCliente = $this->buscar($numero);
        if ($objCliente != null){
            $objCliente->eliminar($objCliente);
            $men = "El cliente se elimino de forma satisfactoria";
        }else
            $men = "El cliente se elimino de forma satisfactoria";
        return view("administrador.clientes.listarClientes", ['men' => $men, 'Clientes' => $this->listar()] );
    }

    public function editControlador($numero){
        $cliente = $this->buscar($numero);
        return view('administrador.clientes.editarDatosCliente', ['Cliente' => $cliente]);
    }

    public function listarControlador(){
        return view('administrador.clientes.listarClientes', ['Clientes' => $this->listar()] );
    }

    //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
    public function listar(){
        return $listaCliente = Cliente::all();
    }

    //este metodo fue creado para tener solo una cracion de cliente y un camino para el FIND
    public function buscar($numero){
        $objCliente = new Cliente();
        return $objCliente->buscar($numero);
    }
}
