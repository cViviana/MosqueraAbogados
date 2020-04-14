@extends('diseño-base.plantilla-listar')
@section("resaltar-usuarios", "active")
@section("resaltar-listarUsuarios", "active")

@section('titulo','Información de Usuarios')
@section('titulo-listar', 'LISTADO DE USUARIOS')

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
    @if (session()->has('mensajeRolErroneo'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeRolErroneo')}}
        </div>
    @endif
    @if (session()->has('mensajeRolNoAsignado'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeRolNoAsignado')}}
        </div>
    @endif
@endsection

@section('nombre-campos-columnas')
    <th scope="col">Cedula</th>
    <th scope="col">Nombre</th>
    <th scope="col">Email</th>
    <th scope="col">Teléfono</th>
    <th scope="col">Cargo</th>
    <th scope="col">Asignar cargo</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    <!--  **  NOMBRE DE VARIABLES QUE SE DEBEN MOSTRAR EN ESTA PLANTILLA **
    listar => 'Usuarios'
    'mensajeRegistro'
    'mensajeNoRegistro'
    'mensajeEliminado'
    'mensajeNoEliminado'
    'mensajeActualizacion'
    'mensajeNoActualizacion'

-->     
    @foreach($Usuarios as $usuario)
        <tr>
            <td>{{$usuario->cedula}}</td>
            <td style="text-transform:capitalize">{{$usuario->nombre}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->telefono}}</td>
            <td>{{$usuario->name}}</td>
            <td>
                <a href="{{route('buscarUsuario', [$usuario->cedula,'asignarRol'])}}" class="btn btn-info btn-sm">
                    <!--Asginar Rol-->
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="{{route('editarUsuario', [$usuario->cedula,'actualizar'])}}" class="btn btn-primary btn-sm">
                    <i class="fas fa-user-edit"></i>
                </a>
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar{{$usuario->cedula}}">
                    <i class="fa fa-user-times" aria-hidden="true"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalEliminar{{$usuario->cedula}}" tabindex="0" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEliminarLabel">Confirmar Accion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Esta seguro que desea eliminar  al cliente {{$usuario->nombre}} con Identificación {{$usuario->cedula}} 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('form-eliminar-usuario-{{$usuario->cedula}}').submit();" type="button" data-dismiss="modal">
                                    Aceptar
                                </button>

                                <form id="form-eliminar-usuario-{{$usuario->cedula}}" action="{{route('eliminarUsuario', [$usuario->cedula])}}" method="get" style="display: none;">
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
