@extends('diseño-base.plantilla-listar')
@section("resaltar-ubicacion-documentos", "active")
@section("resaltar-listarUbicaciones", "active")

@section('titulo','Información de Ubicación de Documentos')
@section('titulo-listar', 'LISTADO DE UBICACIONES DE DOCUMENTOS')

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
    <th scope="col">Número de archivero</th>
    <th scope="col">Número de gaveta</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($ubicaciones as $ubicacion)
        <tr>
            <td>{{$ubicacion->numArchivero}}</td>
            <td>{{$ubicacion->numGaveta}}</td>
            <td>
                <a href="{{route('editarUbicacion', $ubicacion->id)}}" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar{{$ubicacion->id}}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalEliminar{{$ubicacion->id}}" tabindex="0" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEliminarLabel">Confirmar Accion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Esta seguro que desea eliminar la ubicacion fisica archivero {{$ubicacion->numArchivero}} - gaveta {{$ubicacion->numGaveta}}  del sistema ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('form-eliminar-{{$ubicacion->id}}').submit();" type="button" data-dismiss="modal">
                                    Aceptar
                                </button>

                                <form id="form-eliminar-{{$ubicacion->id}}" action="{{route('eliminarUbicacion', $ubicacion->id)}}" method="get" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
@endsection
