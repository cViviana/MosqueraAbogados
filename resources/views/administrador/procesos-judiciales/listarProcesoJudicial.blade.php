@extends('diseño-base.perfil')
@section('titulo','Procesos Judiciales')

@section('CRUD-proceso-judicial')
    <div class="container_pagina">
        <div class="texto_titulo">LISTADO DE PROCESOS JUDICIALES</div>
        <table class="table table-responsive tabla table-hover">
            <thead class="thead-light container_formulario">
                <tr>
                    <th scope="col">Radicado</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Demandado</th>
                    <th scope="col">Demandante</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha inicio</th>
                    <th scope="col">Fecha fin</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody class="container_formulario">
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
            </tbody>
        </table>
        <br>
    </div>
@endsection
