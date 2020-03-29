@extends('diseño-base.plantilla-registrar')
@section("resaltar-tipos-documentos", "active")
@section("resaltar-listarTiposDocumentos", "active")

@section('titulo','Información de Tipo de Documento')
@section('titulo-formulario', "ACTUALIZAR DATOS DE UN TIPO DE DOCUMENTO")

@section('formulario')
    <form action="{{route('editarTipo')}}"class="texto_campos" method="post">
    {{csrf_field()}}
    <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
            </div>
            <input type="text" name='nombre' id='nombre' class="form-control @error('nombre') is-invalid @enderror" placeholder="* Nuevo tipo de documento" value="{{$tipo->nombre}}" required>
            @error('nombre')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <input type="hidden" name="id" id='id' value="{{$tipo->id}}">
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <div class="texto_campos">
            Los campos con (*) son obligatorios
            <br>
            <br>
        </div>
    </form>
@endsection
