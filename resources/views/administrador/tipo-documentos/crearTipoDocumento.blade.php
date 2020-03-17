@extends('diseño-base.plantilla-admin')
@section("resaltar-crearTipoDocumento", "active")

@section('seccion')
  <div class="container_pagina">
    <div class="texto_titulo">CREAR UN TIPO DE DOCUMENTO</div> 

      <div class="container_formulario" id="contenedorMensajes">
        @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('men'))
            <div class="alert alert-success animated fadeIn">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('men')}}
            </div>
        @endif
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
