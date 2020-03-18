@extends('diseño-base.plantilla-listar')
@section("resaltar-listarContrapartes", "active")
@section('titulo','Información de contrapartes')

@section('titulo-listar', 'LISTADO DE CONTRAPARTES')

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
    <th scope="col">Número</th>
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
                <a href="{{route('editarCliente', $cliente->numero)}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
            <td>
                <form action="{{route('eliminarCliente', [$cliente->numero,'contraparte'])}}"  method="get">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
