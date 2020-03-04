@extends('diseño-base.perfil')
@section('titulo','Información Ubicaciones')

@section('CRUD-ubicacion-documentos')
    <table class="table table-responsive table-hover">
        <thead class="thead-light">
            <tr style="color:#0066FF">
                <th scope="col">Número Archivero</th>
                <th scope="col">Numero Gabetas</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <!--La variable es 'ubicaciones'-->
        <tbody>
            @foreach($ubicaciones as $ubicacion)
            <tr style="color:#0066FF">
                <td>{{$ubicacion->id}}</td>
                <td>{{$ubicacion->numArchivero}}</td>
                <td>{{$ubicacion->numGabeta}}</td>
                <td><a href="{{route('editarUbicacion', $ubicacion->id)}}" class="btn btn-primary">Actualizar</a></td>
                <td>
                    <form action="{{route('eliminarUbicacion', $ubicacion->id)}}"  method="get">
                        @csrf
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection