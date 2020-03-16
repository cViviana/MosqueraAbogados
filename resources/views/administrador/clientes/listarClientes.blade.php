@extends('diseño-base.perfil')
@section('titulo','Información de clientes')

@section('CRUD-datos-cliente')
    <div class="container_pagina">
        <div class="texto_titulo">LISTADO DE CLIENTES</div>
        <table class="table table-responsive tabla table-hover">
            <thead class="thead-light container_formulario">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody class="container_formulario">
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
            </tbody>
            </table>
            <br>
    </div>
@endsection