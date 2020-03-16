@extends('diseño-base.plantilla-admin')
@section('titulo','Editar Ubicacion')

@section('seccion')

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
      EDITAR UBICACIÓN
    </div> 
    <div class="container_pagina container_formulario">
      <div class="mascara">
      <form action="{{route('editarUbicacionFisica')}}"class="texto_campos" method="post">
        {{csrf_field()}}
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="inputGroup-sizing-default"><i class="fa fa-plus-square"></i></span>
              <input type="text" id="id" name="id" readonly="readonly"  required="required"  value="{{$ubicacion->id}}" class="form-control col-md-7 col-xs-12">
            </div>
            <br> 
            <div class="input-group">
              <span class="input-group-addon" id="inputGroup-sizing-default"><i class="fa fa-plus-square"></i></span>
              <input type="text" id='numArchivero'name='numArchivero' class="form-control" placeholder="* Nueva Archivador" value="" required>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="inputGroup-sizing-default"><i class="fa fa-plus-square"></i></span>
              <input type="text" id='numGabeta'name='numGabeta' class="form-control" placeholder="* Nueva Gabeta" value=""required>
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
