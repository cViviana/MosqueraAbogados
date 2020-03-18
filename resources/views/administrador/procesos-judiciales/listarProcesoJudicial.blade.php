@extends('diseño-base.plantilla-listar')
@section('titulo','Procesos Judiciales')
@section("resaltar-listarCasos", "active")

@section('titulo-listar', 'LISTADO DE PROCESOS JUDICIALES')

@section('contenedor-mensajes')
    @if (session('mensajeDeRegistroCasoExitoso'))
        <div class="flash-message">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{Session::get('mensajeDeRegistroCasoExitoso')}}
                {{session::forget('mensajeDeRegistroCasoExitoso')}}
            </div>
        </div>
    @endif
@endsection

@section('nombre-campos-columnas')
    <th scope="col">Radicado</th>
    <th scope="col">Descripción</th>
    <th scope="col">Cliente</th>
    <th scope="col">Contraparte</th>
    <th scope="col">Estado</th>
    <th scope="col">Fecha inicio</th>
    <th scope="col">Fecha fin</th>
    <th scope="col">Abogado</th>
    <th scope="col">Ver archivos</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($Casos as $caso)
        <tr>
            <td>{{$caso->radicado}}</td>
            <td>{{$caso->descripcion}}</td>
            <td>{{$caso->clienteCaso->nombre}}</td>
            <td>{{$caso->clienteContraparte->nombre}}</td>
            <td>{{$caso->estado}}</td>
            <td>{{$caso->fecha_inicio}}</td>
            <td>{{$caso->fecha_fin}}</td>
            <td>
                <tr>
                    @foreach($caso->dirige as $dir)
                        <td>{{$dir->nombre}}</td>
                    @endforeach
                </tr>
            </td>

            <td>
                <a href="#" class="btn btn-primary">
                    <span class="glyphicon glyphicon-folder-open text-center"></span>
                </a>
            </td>
            <td>
                <a href="" class="btn btn-primary">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
            <td>
                <form action=""  method="get">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
