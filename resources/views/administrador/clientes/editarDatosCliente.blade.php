@extends('diseño-base.perfil')

@section('titulo','Información de Clientes')
@section('editar-datos-cliente')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="POST" action="{{ url('/electiva/actualizar',$cliente->numero) }}">
                        {{ csrf_field() }}
                        <fieldset>
                                <div class="form-group">
                                    <label for="text">Numero</label>
                                    <input type="number" class="form-control" id="numero" name="numero"
                                        value="{{$cliente->numero}}">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        value="{{$cliente->nombre}}">
                                </div>
                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <input type="text" class="form-control" id="tipo" name="tipo"
                                        value="{{$cliente->tipo}}">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" class="form-control" id="tipo" name="tipo"
                                        value="{{$cliente->telefono}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{$cliente->email}}"
                                        placeholder="Digite su correo electronico">
                                </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Actualizar datos</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection