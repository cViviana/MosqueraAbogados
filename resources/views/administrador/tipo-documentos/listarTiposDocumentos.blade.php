@extends('diseño-base.plantilla-listar')
@section("resaltar-listarTiposDocumentos", "active")
@section('titulo','Información de tipos de documentos')

@section('titulo-listar', 'LISTADO DE TIPOS DE DOCUMENTOS')

@section('nombre-campos-columnas')
    <th scope="col">Código</th>
    <th scope="col">Nombre</th>
@endsection
@section('listado-columnas')
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
@endsection