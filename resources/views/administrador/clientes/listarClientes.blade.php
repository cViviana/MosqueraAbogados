@extends('diseño-base.plantilla-listar')
@section("resaltar-clientes", "active")
@section("resaltar-listarClientes", "active")

@section('titulo','Información de Clientes')
@section('titulo-listar', 'LISTADO DE CLIENTES')

@section('contenedor-mensajes')
    @if (session()->has('mensajeNoActualizacion'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeNoActualizacion')}}
        </div>
    @endif
    @if (session()->has('mensajeNoEliminado'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeNoEliminado')}}
        </div>
    @endif
@endsection

@section('nombre-campos-columnas')
    <th scope="col">Identificación</th>
    <th scope="col">Nombre</th>
    <th scope="col">Tipo</th>
    <th scope="col">Teléfono</th>
    <th scope="col">Email</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($Clientes as $cliente)
        <tr>
            <td>{{$cliente->numero}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->tipo}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->email}}</td>
            <td>
                <a href="{{route('editarCliente', $cliente->numero)}}" class="btn btn-primary btn-sm">
                    <i class="fas fa-user-edit"></i>
                </a>
            </td>
            <td>

                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar{{$cliente->numero}}">
                    <i class="fa fa-user-times" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="modalEliminar{{$cliente->numero}}" tabindex="0" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEliminarLabel">Confirmar Accion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Esta seguro que desea eliminar {{$cliente->numero}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('form-eliminar-usuario-{{$cliente->numero}}').submit();" type="button" data-dismiss="modal">
                                    Aceptar
                                </button>

                                <form id="form-eliminar-usuario-{{$cliente->numero}}" action="{{route('eliminarCliente', [$cliente->numero,'cliente'])}}" method="get" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
@endsection
