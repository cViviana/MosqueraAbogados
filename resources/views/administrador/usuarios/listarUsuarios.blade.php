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
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
   
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
    
@endsection
