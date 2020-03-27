@extends('diseño-base.plantilla-registrar')
@section("resaltar-ubicacion-documentos", "active")
@section("resaltar-crearUbicacion", "active")

@section('titulo','Información de Ubicación de Documentos')
@section('titulo-formulario', "AGREGAR UNA UBICACIÓN")

@section('contenedor-mensajes')
    @if (session()->has('mensajeNoRegistro'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeNoRegistro')}}
        </div>
    @endif
@endsection

@section("formulario")
  <form action="{{route('agregarUbicacionFisica')}}"class="texto_campos" method="post">
    {{csrf_field()}}
        <br>
        <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
          </div>
          <input type="text" id='numArchivero'name='numArchivero' class="form-control" placeholder="* Nuevo Archivador" required>
        </div>
        <br>
        <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
          </div>
          <input type="text" id='numGaveta'name='numGaveta' class="form-control" placeholder="* Nueva Gaveta" required>
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
