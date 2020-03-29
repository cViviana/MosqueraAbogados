@extends('diseño-base.plantilla-registrar')
@section("resaltar-tipos-documentos", "active")
@section("resaltar-crearTipoDocumento", "active")

@section('titulo','Información de Tipo de Documento')
@section('titulo-formulario', "CREAR UN TIPO DE DOCUMENTO")

@section('contenedor-mensajes')
    @if (session()->has('menError'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('menError')}}
        </div>
    @endif
@endsection

@section("formulario")
  <form action="{{route('agregarTipoDocumento')}}"class="texto_campos" method="post">
  {{csrf_field()}}
      <br> 
      <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
        </div>
        <input type="text" id='nombre'name='nombre' class="form-control @error('nombre') is-invalid @enderror" placeholder="* Nuevo tipo de documento" required>
        @error('nombre')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Agregar</button>
      <div class="texto_campos">
        Los campos con (*) son obligatorios
        <br>
        <br>
      </div>
  </form>
@endsection
