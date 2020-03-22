@extends('diseño-base.plantilla-listar')
@section("resaltar-tipos-documentos", "active")
@section("resaltar-listarTiposDocumentos", "active")

@section('titulo','Información de tipos de documentos')

@section('titulo-listar', 'LISTADO DE TIPOS DE DOCUMENTOS')

@section('nombre-campos-columnas')
    <th scope="col">Código</th>
    <th scope="col">Nombre</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section('listado-columnas')
    @foreach($TiposDocumentos as $tipoDocumento)
    <tr>
        <td>{{$tipoDocumento->id}}</td>
        <td>{{$tipoDocumento->nombre}}</td>
        <td>
            <a href="{{route('editarTipoDocumento', $tipoDocumento->id)}}" class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td>
            <form action="{{route('eliminarTipoDocumento', [$tipoDocumento->id, 'id'])}}"  method="get">
                @csrf
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
@endsection