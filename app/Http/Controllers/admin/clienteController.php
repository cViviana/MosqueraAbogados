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
        $mensajeNoRegistro = "";
        $aux = $this->buscar($request->numero);
        if( $aux == null ){
            $objCliente = new Cliente($request->all());
            $objCliente->guardar($objCliente);
            $mensajeRegistro = "Éxito. ". $request->nombre ." con identificación ".
                        $request->numero ." ha sido registrado.";
            return redirect()->route('listarClientes', ['roll'=> $request->roll,'Clientes' => $this->listar($request->roll)])->with('mensajeRegistro', $mensajeRegistro);
        }else{
            $mensajeNoRegistro = "Ya existe la identificación ". $request->numero ." del cliente ".
                        $request->nombre;
            return redirect()->route('registrarCliente')->with('mensajeNoRegistro', $mensajeNoRegistro);
        }
    }

    public function editarControlador(valFormRegCliente $request){
        $objCliente = $this->buscar($request->numero);
        $mensajeNoActualizacion = "";
        if($objCliente != null){
            $objCliente->fill($request->all());
            $objCliente->guardar($objCliente);
            $mensajeActualizacion = "El cliente se actualizó de forma satisfactoria";
            return redirect()->route('listarClientes', ['roll'=> $request->roll,'Clientes' => $this->listar($request->roll)])->with('mensajeActualizacion', $mensajeActualizacion);
        }else{
            $mensajeNoActualizacion = "El identificador del cliente no existe";
            return redirect()->route('listarClientes', ['roll'=> $request->roll,'Clientes' => $this->listar($request->roll)])->with('mensajeNoActualizacion', $mensajeNoRegistro);
        }
    }

    public function eliminarControlador($numero,$roll){
        $objCliente = $this->buscar($numero);
        $mensajeNoEliminado = "";
        if ($objCliente != null){
            $objCliente->eliminar($objCliente);
            $mensajeEliminado = "El cliente se elimino de forma satisfactoria";
            return redirect()->route('listarClientes', ['roll'=> $roll,'Clientes' => $this->listar($roll)])->with('mensajeEliminado', $mensajeEliminado);
        }else{
            $mensajeNoEliminado = "El cliente no se elimino de forma satisfactoria";
            return redirect()->route('listarClientes', ['roll'=> $roll,'Clientes' => $this->listar($roll)])->with('mensajeNoEliminado', $mensajeNoEliminado);
        }
    }

    public function editControlador($numero){
        $cliente = $this->buscar($numero);
        return view('administrador.clientes.editarDatosCliente', ['Cliente' => $cliente]);
    }

    public function listarControlador($roll){
        return view('administrador.clientes.listarClientes', ['Clientes' => $this->listar($roll)] );
    }

    //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
    public function listar($roll){
        return $listaCliente = Cliente::where("roll","=",$roll)->get();
    }

    //este metodo fue creado para tener solo una cracion de cliente y un camino para el FIND
    public function buscar($numero){
        $objCliente = new Cliente();
        return $objCliente->buscar($numero);
    }
}
