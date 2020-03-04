@extends('diseño-base.perfil')
@section('titulo','Información de clientes')

@section('CRUD-tipos-documentos')
    <div class="container_pagina">
        <div class="texto_titulo">LISTADO DE TIPOS DE DOCUMENTOS</div>
        <table class="table table-responsive  tabla">
            <thead class="thead-light container_formulario">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody class="container_formulario">
                @foreach($TiposDocumentos as $tipoDocumento)
                <tr>
                    <td>{{$tipoDocumento->id}}</td>
                    <td>{{$tipoDocumento->nombre}}</td>
                    <td>
                        <a href="{{route('editarTipoDocumento', $tipoDocumento->id)}}" class="btn btn-primary">
                            <span class="glyphicon glyphicon-pencil">Actualizar</span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('eliminarTipoDocumento', $tipoDocumento->id)}}"  method="get">
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