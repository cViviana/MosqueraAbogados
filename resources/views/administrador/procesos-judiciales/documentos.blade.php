@extends('diseño-base.plantilla-listar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Información de documentos')
@section('titulo-listar', 'LISTADO DE DOCUMENTOS')

@section('contenedor-mensajes')
    @if (session()->has('mensajeNoActualizacion'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeNoActualizacion')}}
        </div>
    @endif
@endsection
@section('contenedor-mensajes')
    @if (session()->has('mensajeNoEliminado'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeNoEliminado')}}
        </div>
    @endif
@endsection

@section("nombre-campos-columnas")
    <th scope="col">Núm. Radicado</th>
    <th scope="col">Cliente</th>
    <th scope="col">Cliente</th>
    <th scope="col">Ver Documentos</th>
@endsection

@section("listado-columnas")
  @foreach ($ListaDocs as $caso)
    <tr>
        <td>{{$caso->radicado}}</td>
        <td>{{$caso->clienteCaso->nombre}}</td>
        <td>{{$caso->clienteContraparte->nombre}}</td>
        <td>
            <a href="{{route('listarDocumentosRadicado',$caso->radicado)}}" class="btn btn-primary">
                <i class="fas fa-eye"></i>
            </a>
        </td>
    </tr>
   @endforeach
@endsection
