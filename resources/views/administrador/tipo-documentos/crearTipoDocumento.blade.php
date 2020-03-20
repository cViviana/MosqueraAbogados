@extends('diseño-base.plantilla-registrar')
@section("resaltar-tipos-documentos", "active")
@section("resaltar-crearTipoDocumento", "active")

@section('titulo','Crear un tipo de documento')

@section('titulo-formulario', "CREAR UN TIPO DE DOCUMENTO")

@section("contenedor-mensajes")
  @if (session()->has('men'))
      <div class="alert alert-success animated fadeIn">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          {{session('men')}}
      </div>
  @endif
@endsection

@section("formulario")
  <form action="{{route('agregarTipoDocumento')}}"class="texto_campos" method="post">
  {{csrf_field()}}
      <br> 
      <div class="input-group">
        <span class="input-group-addon" id="inputGroup-sizing-default"><i class="fa fa-plus-square"></i></span>
        <input type="text" id='nombre'name='nombre' class="form-control" placeholder="* Nuevo tipo de documento" required>
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
