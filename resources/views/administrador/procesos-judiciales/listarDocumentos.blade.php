@extends('diseño-base.plantilla-listar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Información de documentos')
@section('titulo-listar', 'LISTADO DE DOCUMENTOS')

@section("nombre-campos-columnas")
    <th scope="col">Núm. Radicado</th>
    <th scope="col">Archivero</th>
    <th scope="col">Gaveta</th>
    <th scope="col">Tipo</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>   
@endsection

@section("listado-columnas")
    <!-- Aquí va el ciclo -->
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <a href="" class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td>
            <form action=""  method="get">
                @csrf
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </td>
    </tr>
   <!-- Aquí termina el ciclo -->
@endsection