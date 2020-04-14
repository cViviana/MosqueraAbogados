@extends('diseño-base.plantilla-listar')
@section("resaltar-casos", "active")
@section("resaltar-listarCasos", "active")

@section('titulo','Procesos Judiciales')
@section('titulo-listar', 'LISTADO DE PROCESOS JUDICIALES')

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

@section('nombre-campos-columnas')
    <th scope="col">Radicado</th>
    <th scope="col">Cliente</th>
    <th scope="col">Abogado</th>
    <th scope="col">Estado</th>
    <th scope="col">Información</th>

@endsection

@section("listado-columnas")
    @foreach($Casos as $caso)
        <tr>
            <td>{{$caso->radicado}}</td>
            <td style="text-transform:capitalize">{{$caso->clienteCaso->nombre}}</td>
            <td style="text-transform:capitalize">
                @foreach($caso->dirige as $dir) 
                    {{$dir->nombre}} <br> 
                @endforeach
            </td>
            <td style="text-transform:capitalize">{{$caso->estado}}</td>
            <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEliminar{{$caso->radicado}}">
                    <i class="fa fa-info" aria-hidden="true"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="modalEliminar{{$caso->radicado}}" tabindex="0" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEliminarLabel">Información del Caso</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Radicado</th>
                                            <td>
                                                {{$caso->radicado}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Descripción</th>
                                            <td>
                                                {{$caso->descripcion}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cliente</th>
                                            <td style="text-transform:capitalize">
                                                {{$caso->clienteCaso->nombre}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Contraparte</th>
                                            <td style="text-transform:capitalize">
                                                {{$caso->clienteContraparte->nombre}}
                                            </td>
                                        </tr>
                                        <tr style="text-transform:capitalize">
                                            <th scope="row">Abogados</th>
                                            <td>
                                            @foreach($caso->dirige as $dir) 
                                                {{$dir->nombre}} <br> 
                                            @endforeach
                                            </td>
                                        </tr>
                                        <tr style="text-transform:capitalize">
                                            <th scope="row">Estado</th>
                                            <td>
                                                {{$caso->estado}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fecha de inicio</th>
                                            <td>
                                                {{$caso->fecha_inicio}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fecha de finalizacion</th>
                                            <td>
                                                {{$caso->fecha_fin}}
                                            </td>
                                        </tr>
                                        <tr >
                                            <th scope="row">Documentos del caso</th>
                                            <td>
                                                <a href="{{route('listarDocumentosRadicado',$caso->radicado)}}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-folder-open"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr >
                                            <th scope="row">Editar caso</th>
                                            <td>
                                                <a href="{{route('editarCaso',$caso->radicado)}}" class="btn btn-success btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            
        </tr>
    @endforeach
@endsection
