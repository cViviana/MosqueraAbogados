@extends('diseño-base.perfil')

@section('titulo','Información de Clientes')
@section('listar-proceso-judicial')
    <table class="table table-responsive table-hover table-dark">
        <thead >
            <tr style="color:#0066FF">
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
            @foreach($Clientes as $cliente)
            <tr style="color:#0066FF">
                <td>{{$cliente->numero}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->tipo}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->email}}</td>
                <td><a href="{{ route('editarCliente', $cliente->numero)}}" class="btn btn-primary">Actualizar</a></td>
                <td>
                    <form action="{{ route('eliminarCliente', $cliente->numero)}}"  method="get">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection