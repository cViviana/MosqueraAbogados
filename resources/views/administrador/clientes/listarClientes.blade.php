@extends('diseño-base.plantilla-listar')
@section('titulo','Información de clientes')

@section('titulo-listar', 'LISTADO DE CLIENTES')

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
                <form action="{{route('eliminarCliente', $cliente->numero)}}"  method="get">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection