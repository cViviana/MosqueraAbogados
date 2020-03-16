@extends('diseño-base.perfil')
@section('titulo','Procesos Judiciales')

@section('CRUD-proceso-judicial')
    <div class="container_pagina">
        <div class="texto_titulo">LISTADO DE PROCESOS JUDICIALES</div>
        <table class="table table-responsive tabla table-hover">
            <thead class="thead-light container_formulario">
                <tr>
                    <th scope="col">Radicado</th>
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
                <!-- Aquí va un ciclo que recibe un listado de casos judiciales para mostrarlo en la tabla  -->
                <tr>
                    <td><!-- caso->radicado --></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> <button class="btn btn-primary">Actualizar</a></td>
                    <td> <button class="btn btn-danger" type="submit">Eliminar</button></td>
                </tr>    
              
            </tbody>
        </table>
        <br>
    </div>
@endsection