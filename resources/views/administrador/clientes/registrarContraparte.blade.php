@extends('diseño-base.plantilla-admin')
@section("resaltar-registrarContraparte", "active")
@section('titulo','Registrar Contraparte')

@section('seccion')
    <div class="container_pagina">
        <div class="texto_titulo">REGISTRAR CONTRAPARTE</div>
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
            @if (session()->has('mensajeNoRegistro'))
                <div class="alert alert-danger animated fadeIn">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{session('mensajeNoRegistro')}}
                </div>
            @endif
        </div>
        <div class="container_formulario">
            <div class="mascara">
                <form action="{{route('agregarContraparte')}}" class="texto_campos" method="post">
                    {{csrf_field()}}
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name='nombre' id='nombre' class="form-control" placeholder="* Nombre completo" type="text" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-list"></i></span>
                        <select name='tipo' id='tipo' class="form-control">
                            <option selected="">* Seleccione el tipo de persona</option>
                            <option value="natural">Persona natural</option>
                            <option value="juridica">Persona jurídica</option>
                        </select>
                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                        <input name='numero' id='numero' class="form-control" placeholder="* Número de identificación" type="text" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                        <input name='telefono' id='telefono' class="form-control" placeholder="* Número de teléfono" type="text" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name='email' id='email' class="form-control" placeholder="* Correo electrónico" type="text" required>
                    </div>
                    <input type="hidden" name="roll" id='roll' value="contraparte">
                    <br>
                    <button type="submit" class="btn btn-primary">Registrar Contraparte</button>
                    <div class="texto_campos">Los campos con (*) son obligatorios</div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
