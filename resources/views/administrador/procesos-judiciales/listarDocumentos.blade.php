@extends('diseño-base.plantilla-listar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Información de documentos')
@section('titulo-listar', 'LISTADO DE DOCUMENTOS')

@section("nombre-campos-columnas")
    <th scope="col">Nombre del archivo</th>
    <th scope="col">Información </th>
    <th scope="col">Eliminar</th>
    <!---<th scope="col">Ubicación física (Archivero-Gaveta)</th>
    <th scope="col">Tipo</th>
    <th scope="col">Descripción</th>
    <th scope="col">Editar</th>
    <th scope="col">Ver</th>
    <th scope="col">Eliminar</th>--->
@endsection

@section("listado-columnas")
    @foreach($Documentos as $doc)
    <tr>
        <td>{{$doc->nombreArchivo}}</td>
        <td>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalDocumento{{$doc->id}}">
                <i class="fa fa-info" aria-hidden="true"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalDocumento{{$doc->id}}" tabindex="0" role="dialog" aria-labelledby="modalDocumentoLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDocumentoLabel">Información del Documento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nombre del archivo</th>
                                        <td style="text-transform:capitalize">
                                            {{$doc->nombreArchivo}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Archivero-Gaveta</th>
                                        <td>
                                            {{$doc->docEstaUbicacion->numArchivero}} - {{$doc->docEstaUbicacion->numGaveta}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tipo</th>
                                        <td style="text-transform:capitalize">
                                            {{$doc->docCorrespondeTipo->nombre}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Descripcion</th>
                                        <td>
                                            {{$doc->descripcion}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Leer</th>
                                        <td>
                                            <form action="{{route('verDocumento', $doc->id) }}" method="post" target="_blank" >
                                                @csrf
                                                <button class="btn btn-success btn-sm">
                                                    <i class="fas fa-book-reader"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Editar</th>
                                        <td>
                                            <a href="{{route('editarDocumento',$doc->id)}}" class="btn btn-primary btn-sm">
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
        <td>
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar{{$doc->id}}">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modalEliminar{{$doc->id}}" tabindex="0" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEliminarLabel">Confirmar Acción</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Esta seguro que desea el documento {{$doc->nombreArchivo}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                document.getElementById('form-eliminar-{{$doc->id}}').submit();" type="button" data-dismiss="modal">
                                Aceptar
                            </button>

                            <form id="form-eliminar-{{$doc->id}}" action="{{route('eliminarDocumento', [$doc->id, 'id'])}}" method="get" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </td>

        <!---<td>{{$doc->docEstaUbicacion->numArchivero}} - {{$doc->docEstaUbicacion->numGaveta}}</td>
        <td>{{$doc->docCorrespondeTipo->nombre}}</td>
        <td>{{$doc->descripcion}}</td>
        <td>
            <a href="{{route('editarDocumento',$doc->id)}}" class="btn btn-primary btn-sm">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td>
            <form action="{{route('verDocumento', $doc->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button class="btn btn-success btn-sm">
                        <i class="fas fa-book-reader"></i>
                    </button>
            </form>
        </td>
        <td>
            <form action="{{route('eliminarDocumento',$doc->id)}}"  method="get">
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Esta seguro que desea eliminar')" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </td>--->
    </tr>
   @endforeach
@endsection
