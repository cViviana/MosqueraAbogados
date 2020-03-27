@extends('diseño-base.plantilla-registrar')
@section("resaltar-contraparte", "active")
@section("resaltar-registrarContraparte", "active")

@section('titulo','Registrar Contraparte')

@section('titulo-formulario', "REGISTRAR CONTRAPARTE")

@section("contenedor-mensajes")
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
    <form action="{{route('agregarContraparte')}}" class="texto_campos" method="post">
        {{csrf_field()}}
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="fa fa-user"></i>
                </span>
            </div>
            <input name='nombre' id='nombre' class="form-control" value= "{{ old('nombre') }}" placeholder="* Nombre completo" type="text" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-list"></i></span>
            </div>
            <select name='tipo' id='tipo' class="form-control">
                <option selected="">* Seleccione el tipo de persona</option>
                <option value="natural">Persona natural</option>
                <option value="juridica">Persona jurídica</option>
            </select>
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            <input name='numero' id='numero' class="form-control" value= "{{ old('numero') }}" placeholder="* Número de identificación" type="text" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
            </div>
            <input name='telefono' id='telefono' class="form-control" value= "{{ old('telefono') }}" placeholder="* Número de teléfono" type="text" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input name='email' id='email' class="form-control" value= "{{ old('email') }}" placeholder="Correo electrónico" type="text">
        </div>
        <input type="hidden" name="roll" id='roll' value="contraparte">
        <br>
        <button type="submit" class="btn btn-primary">Registrar Contraparte</button>
        <div class="texto_campos">Los campos con (*) son obligatorios</div>
        <br>
    </form>
@endsection
