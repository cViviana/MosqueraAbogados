@extends('diseño-base.plantilla-listar')
@section("resaltar-tipos-documentos", "active")
@section("resaltar-listarTiposDocumentos", "active")

@section('titulo','Información de Tipo de Documento')
@section('titulo-listar', 'LISTADO DE TIPOS DE DOCUMENTOS')

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
    <th scope="col">Nombre</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section('listado-columnas')
    @foreach($TiposDocumentos as $tipoDocumento)
    <tr>

        <td>{{$tipoDocumento->nombre}}</td>
        <td>
            <a href="{{route('editarTipoDocumento', $tipoDocumento->id)}}" class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td>
            <form action="{{route('eliminarTipoDocumento', [$tipoDocumento->id, 'id'])}}"  method="get">
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Esta seguro que desea eliminar')" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
@endsection