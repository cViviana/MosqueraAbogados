@extends('diseño-base.plantilla-listar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Información de documentos')
@section('titulo-listar', 'LISTADO DE DOCUMENTOS')

@section("nombre-campos-columnas")
    <th scope="col">ID</th>
    <th scope="col">Ruta</th>
    <th scope="col">Descripción</th>
    <th scope="col">Estado</th>
    <th scope="col">Tipo</th>
    <th scope="col">Ubicación</th>
    <th scope="col">Núm. Radicado</th>
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
        <td></td>
        <td></td>
        <td>
            <form action=""  method="get">
                @csrf
                <button class="btn btn-danger" type="submit">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </form>
        </td>
    </tr>
   <!-- Aquí termina el ciclo -->
@endsection