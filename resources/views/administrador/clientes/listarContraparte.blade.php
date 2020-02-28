@extends('diseño-base.perfil')

@section('titulo','Procesos Judiciales')
@section('listar-proceso-judicial')
    <table class="table table-responsive table-hover">
        <thead>
            <tr style="color:#FFFFFF">
                <th scope="col">Número</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            {{-- Insertar aqui codigo para traer datos --}}
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