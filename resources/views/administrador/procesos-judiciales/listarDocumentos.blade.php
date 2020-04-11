@extends('diseño-base.plantilla-listar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Información de documentos')
@section('titulo-listar', 'LISTADO DE DOCUMENTOS')

@section("nombre-campos-columnas")
    <th scope="col">Nombre del archivo</th>
    <th scope="col">Ubicación física (Archivero-Gaveta)</th>
    <th scope="col">Tipo</th>
    <th scope="col">Descripción</th>
    <th scope="col">Editar</th>
    <th scope="col">Ver</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($Documentos as $doc)
    <tr>
        <td>{{$doc->nombreArchivo}}</td>
        <td>{{$doc->docEstaUbicacion->numArchivero}} - {{$doc->docEstaUbicacion->numGaveta}}</td>
        <td>{{$doc->docCorrespondeTipo->nombre}}</td>
        <td>{{$doc->descripcion}}</td>
        <td>
            <a href="{{route('editarDocumento',$doc->id)}}" class="btn btn-primary btn-sm">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td>
            <a href="{{route('verDocumento',$doc->id)}}" class="btn btn-primary btn-sm" target="_blank">
                <i class="fas fa-eye"></i>
            </a>
        </td>
        <td>
            <form action="{{route('eliminarDocumento',$doc->id)}}"  method="get">
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Esta seguro que desea eliminar')" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </td>
    </tr>
   @endforeach
@endsection
