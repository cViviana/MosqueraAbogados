@extends('diseño-base.plantilla-listar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Información de documentos')
@section('titulo-listar', 'LISTADO DE DOCUMENTOS')

@section("nombre-campos-columnas")
    <th scope="col">Núm. Radicado</th>
    <th scope="col">Identificacion Cliente</th>
    <th scope="col">Ver Documentos</th>   
@endsection

@section("listado-columnas")
    <!-- Aquí va el ciclo -->
    <tr>
        <td></td>
        <td></td>
        <td>
            <a href="{{route('listarDocumentos')}}" class="btn btn-primary">
                <i class="fas fa-eye"></i>
            </a>
        </td>
    </tr>
   <!-- Aquí termina el ciclo -->
@endsection
