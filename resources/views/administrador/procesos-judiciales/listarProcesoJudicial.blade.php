@extends('diseño-base.perfil')

@section('titulo','Procesos Judiciales')
@section('listar-proceso-judicial')
    <table class="table table-responsive table-hover">
        <thead>
            <tr style="color:#FFFFFF">
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
        <tbody>
            {{-- Insertar aqui codigo para traer datos sobre los procesos judiciales --}}
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button class="btn btn-primary">Actualizar</a></td>
            <td><button class="btn btn-danger" type="submit">Eliminar</button></td>
        </tbody>
    </table>
@endsection