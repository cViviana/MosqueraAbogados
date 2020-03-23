@extends('diseño-base.plantilla-listar')
@section("resaltar-listarUsuarios", "active")
@section('titulo','Información de Usuarios')
@section('titulo-listar', 'LISTADO DE USUARIOS')

@section('contenedor-mensajes')
    @if (session()->has('mensajeRegistro'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('mensajeRegistro')}}
            </div>
        </div>
    @endif
    @if (session()->has('mensajeNoRegistro'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('mensajeRegistro')}}
            </div>
        </div>
    @endif
    @if (session()->has('mensajeActualizacion'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('mensajeActualizacion')}}
            </div>
        </div>
    @endif
    @if (session()->has('mensajeNoActualizacion'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('mensajeActualizacion')}}
            </div>
        </div>
    @endif
    @if (session()->has('mensajeEliminado'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('mensajeEliminado')}}
            </div>
        </div>
    @endif
    @if (session()->has('mensajeNoEliminado'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('mensajeNoEliminado')}}
            </div>
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
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->telefono}}</td>
            <td>{{$usuario->name}}</td>
            <td>
                <a href="{{route('buscarUsuario', [$usuario->cedula,'asignarRol'])}}" class="btn btn-info">
                    <!--Asginar Rol-->
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="" class="btn btn-primary">
                    <i class="fas fa-user-edit"></i>
                </a>
            </td>
            <td>
                <form action=""  method="get">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <i class="fa fa-user-times" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
