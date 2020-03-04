@extends('diseño-base.perfil')

@section('CRUD-tipos-documentos')
  <div class="container_pagina">
    <div class="texto_titulo">
      CREAR UN TIPO DE DOCUMENTO
    </div> 
    <div class="container_pagina container_formulario">
      <div class="mascara">
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
      </div>
    </div>
  </div>
@endsection
