@extends('diseño-base.perfil')
@section('titulo','Actualizar datos de un cliente')

@section('CRUD-tipos-documentos')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container_pagina">
        <div class="texto_titulo">
            ACTUALIZAR DATOS DE UN TIPO DE DOCUMENTO
        </div> 
        <div class="container_pagina container_formulario">
            <div class="mascara">
            <form action="{{route('editarTipo')}}"class="texto_campos" method="post">
            {{csrf_field()}}
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="inputGroup-sizing-default"><i class="fa fa-plus-square"></i></span>
                    <input type="text" id="id" name="id" readonly="readonly" required="required" class="form-control" value="{{$tipo->id}}">
                </div>
                <br> 
                <div class="input-group">
                    <span class="input-group-addon" id="inputGroup-sizing-default"><i class="fa fa-plus-square"></i></span>
                    <input type="text" id='nombre'name='nombre' class="form-control" placeholder="* Nuevo tipo de documento" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <div class="texto_campos">
                    Los campos con (*) son obligatorios
                    <br>
                    <br>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection