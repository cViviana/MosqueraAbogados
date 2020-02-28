<?php

namespace App\Http\Controllers\admin\ProcesosJudiciales;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function crearControlador(Request $request){
        $aux = $this->buscar($request->numero);
        if( $aux == null ){
            $objCliente = new Cliente($request->all());
            $objCliente->guardar($objCliente);
            $men = "El cliente se creo de forma satisfactoria";
            return view('administrador.clientes.registrarCliente', ['men' => $men] );
        }else{
            $men = "El identificador del cliente ya existe";
            return view('administrador.clientes.registrarCliente', ['men' => $men] );
        }
    }

    public function editarControlador(Request $request){
        $objCliente = $this->buscar($request->numero);
        if($objCliente != null){
            $objCliente->fill($request->all());
            $objCliente->guardar($objCliente);
            $men = "El cliente se actualizo de forma satisfactoria";
            return view ("admnistrador.clientes.editarDatosCliente", ['men' => $men] );
        }else{
            $men = "El identificador del cliente ya existe";
            return view ("admnistrador.clientes.editarDatosCliente", ['men' => $men] );
        }
    }

    public function eliminarControlador($numero){
        $objCliente = $this->buscar($numero);
        if ($objCliente != null){
            $objCliente->eliminar($objCliente);
            $men = "El cliente se elimino de forma satisfactoria";
            return view("administrador.clientes.eliminarCliente", ['men' => $men] );
        }else{
            $men = "El cliente se elimino de forma satisfactoria";
            return view("administrador.clientes.eliminarCliente", ['men' => $men] );
        }
    }

    public function listarControlador(){
        $listaCliente=Cliente::all();
        return view('administrador.clientes.listarClientes', ['Clientes' => $listaCliente] );
    }

    public function buscar($numero){
        $objCliente = new Cliente();
        return $objCliente->buscar($numero);
    }

}
