<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use App\Http\Controllers\Controller;
use App\Http\Requests\valFormRegCliente;
use Exception;

class clienteController extends Controller
{
    public function crearControlador(valFormRegCliente $request){
        $mensajeNoRegistro = "";
        $aux = $this->buscar($request->numero);
        if( $aux == null ){
            $objCliente = new Cliente($request->all());
            $objCliente->guardar($objCliente);
            $mensajeRegistro = "Éxito. ". $request->nombre ." con identificación ".
                        $request->numero ." ha sido registrado.";
            return redirect()->route('registrarCliente')->with('mensajeRegistro', $mensajeRegistro);
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
            return redirect()->route('listarClientes', ['roll'=> $request->roll,'Clientes' => $this->listar($request->roll)])->with('men', $mensajeActualizacion);
        }else{
            $mensajeNoActualizacion = "El identificador del cliente no existe";
            return redirect()->route('listarClientes', ['roll'=> $request->roll,'Clientes' => $this->listar($request->roll)])->with('mensajeNoActualizacion', $mensajeNoActualizacion);
        }
    }

    public function eliminarControlador($numero,$roll){
        try{
            $objCliente = $this->buscar($numero);
            $mensajeNoEliminado = "";
            if ($objCliente != null){
                $objCliente->eliminar($objCliente);
                $mensajeEliminado = "El cliente se eliminó de forma satisfactoria.";
                return redirect()->route('listarClientes', ['roll'=> $roll,'Clientes' => $this->listar($roll)])->with('men', $mensajeEliminado);
            }else{
                $mensajeNoEliminado = "El cliente con el identificador ". $numero ." no existe.";
                return redirect()->route('listarClientes', ['roll'=> $roll,'Clientes' => $this->listar($roll)])->with('mensajeNoEliminado', $mensajeNoEliminado);
            }
        }catch(Exception $e){
            $mensajeNoEliminado = "El cliente ". $numero ." no puede ser eliminado ya que pertenece a un caso de la firma.";
            return redirect()->route('listarClientes', ['roll'=> $roll,'Clientes' => $this->listar($roll)])->with('mensajeNoEliminado', $mensajeNoEliminado);
        }
    }

    public function editControlador($numero){
        $cliente = $this->buscar($numero);
        if($cliente->roll != 'cliente'){
            return view('administrador.clientes.editarDatosContraparte', ['Cliente' => $cliente]);
        }else{
            return view('administrador.clientes.editarDatosCliente', ['Cliente' => $cliente]);
        }
    }

    public function listarControlador($roll){
        if($roll == 'cliente'){
          return view('administrador.clientes.listarClientes', ['Clientes' => $this->listar($roll)] );
        }else{
          return view('administrador.clientes.listarContraparte', ['Clientes' => $this->listar($roll)] );
        }
    }

    //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
    public function listar($roll){
      $Clientes = new Cliente;
      $listaCliente = $Clientes->listarPorRoll($roll);
      return $listaCliente;
    }

    //este metodo fue creado para tener solo una cracion de cliente y un camino para el FIND
    public function buscar($numero){
        $objCliente = new Cliente();
        return $objCliente->buscar($numero);
    }
}
