@extends('diseño-base.plantilla-listar')
@section("resaltar-clientes", "active")
@section("resaltar-listarClientes", "active")

@section('titulo','Información de clientes')

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
                    <i class="fas fa-user-edit"></i>
                </a>
            </td>
            <td>
                <form action="{{route('eliminarCliente', [$cliente->numero,'cliente'])}}" method="get">
                    @csrf
                    <button class="btn btn-danger items" onclick="return confirm('Esta seguro que desea eliminar')" type="submit">
                        <i class="fa fa-user-times" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
