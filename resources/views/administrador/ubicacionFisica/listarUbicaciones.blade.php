@extends('diseño-base.plantilla-listar')
@section("resaltar-listarUbicaciones", "active")

@section('titulo','Información de ubicación de documentos')

@section('titulo-listar', 'LISTADO DE UBICACIÓN DE DOCUMENTOS')

@section('nombre-campos-columnas')
    <th scope="col">Número Archivero</th>
    <th scope="col">Numero Gabetas</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($ubicaciones as $ubicacion)
        <tr style="color:#0066FF">
            <td>{{$ubicacion->id}}</td>
            <td>{{$ubicacion->numArchivero}}</td>
            <td>{{$ubicacion->numGabeta}}</td>
            <td>
                <a href="{{route('editarUbicacion', $ubicacion->id)}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
            <td>
                <form action="{{route('eliminarUbicacion', $ubicacion->id)}}"  method="get">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection