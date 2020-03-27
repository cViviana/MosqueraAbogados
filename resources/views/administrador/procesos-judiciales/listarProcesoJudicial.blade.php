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
    <th scope="col">Descripción</th>
    <th scope="col">Cliente</th>
    <th scope="col">Contraparte</th>
    <th scope="col">Estado</th>
    <th scope="col">F.inicio</th>
    <th scope="col">F.fin</th>
    <th scope="col">Abogado</th>
    <th scope="col">Archivos</th>
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
                @foreach($caso->dirige as $dir)
                    {{$dir->nombre}}
                @endforeach
            </td>
            <td>
                <a href="" class="btn btn-info">
                <i class="fas fa-folder-open"></i>    
                </a>
            </td>
            <td>
                <a href="{{route('editarCaso',$caso->radicado)}}" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <form action=""  method="get">
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Esta seguro que desea eliminar')" type="submit">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
