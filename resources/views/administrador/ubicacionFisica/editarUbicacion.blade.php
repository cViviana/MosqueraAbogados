@extends('diseño-base.plantilla-registrar')
@section("resaltar-ubicacion-documentos", "active")
@section("resaltar-listarUbicaciones", "active")

@section('titulo','Información de Ubicación de Documentos')
@section('titulo-formulario', "ACTUALIZAR UBICACIÓN")

@section('formulario')
  <form action="{{route('editarUbicacionFisica')}}"class="texto_campos" method="post">
    {{csrf_field()}}
        <input type="hidden" name="id" id='id' value="{{$ubicacion->id}}">
        <br>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
          </div>
          <input type="text" id='numArchivero'name='numArchivero' class="form-control @error('numArchivero') is-invalid @enderror" placeholder="* Número Archivador" value="{{$ubicacion->numArchivero}}" required>
          @error('numArchivero')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <br>
        <div class="input-group">
          <div  class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
          </div>
          <input type="text" id='numGaveta'name='numGaveta' class="form-control @error('numGaveta') is-invalid @enderror" placeholder="* Número Gaveta" value="{{$ubicacion->numGaveta}}"required>
            @error('numGaveta')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <div class="texto_campos">
          Los campos con (*) son obligatorios
          <br>
          <br>
        </div>
    </form>
@endsection
