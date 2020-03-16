@extends('diseño-base.plantilla-listar')
@section('titulo','Procesos Judiciales')
@section("resaltar-listarCasos", "active")

@section('titulo-listar', 'LISTADO DE PROCESOS JUDICIALES')

@section('nombre-campos-columnas')
    <th scope="col">Radicado</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Demandado</th>
    <th scope="col">Demandante</th>
    <th scope="col">Estado</th>
    <th scope="col">Fecha inicio</th>
    <th scope="col">Fecha fin</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    @foreach($Casos as $caso)
        <tr>
            <td>{{$caso->radicado}}</td>
            <td>{{$caso->descripcion}}</td>
            <td>{{$caso->demandado}}</td>
            <td>{{$caso->demandante}}</td>
            <td>{{$caso->estado}}</td>
            <td>{{$caso->fecha_inicio}}</td>
            <td>{{$caso->fecha_fin}}</td>
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
