@extends('diseño-base.plantilla-admin')
@section('titulo','Información de contraparte')

@section('titulo-listar', 'LISTADO DE CLIENTES CONTRAPARTE')

@section('nombre-campos-columnas')
    <th scope="col">Número</th>
    <th scope="col">Nombre</th>
    <th scope="col">Tipo</th>
    <th scope="col">Teléfono</th>
    <th scope="col">Email</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
@endsection

@section("listado-columnas")
    <!-- aqui va el ciclo -->
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
    <!-- aquí finaliza el ciclo -->
@endsection