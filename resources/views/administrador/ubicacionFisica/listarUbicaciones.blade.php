@extends('diseño-base.plantilla-listar')
@section("resaltar-ubicacion-documentos", "active")
@section("resaltar-listarUbicaciones", "active")

@section('titulo','Información de ubicación de documentos')

@section('titulo-listar', 'LISTADO DE UBICACIÓN DE DOCUMENTOS')

@section('nombre-campos-columnas')
    <th scope="col">Código</th>
    <th scope="col">Número de archivero</th>
    <th scope="col">Número de gaveta</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($ubicaciones as $ubicacion)
        <tr>
            <td>{{$ubicacion->id}}</td>
            <td>{{$ubicacion->numArchivero}}</td>
            <td>{{$ubicacion->numGaveta}}</td>
            <td>
                <a href="{{route('editarUbicacion', $ubicacion->id)}}" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <form action="{{route('eliminarUbicacion', $ubicacion->id)}}"  method="get">
                @csrf
                    <button class="btn btn-danger" type="submit" onclick="this.parentElement.style.display='none'; return confirm('Esta seguro que desea eliminar la ubicacion')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
