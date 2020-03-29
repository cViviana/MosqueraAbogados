@extends('diseño-base.plantilla-registrar')
@section("resaltar-clientes", "active")
@section("resaltar-registrarCliente", "active")

@section('titulo','Información de Clientes')
@section('titulo-formulario', "REGISTRAR CLIENTE")

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
    <form action="{{route('agregarCliente')}}" class="texto_campos" method="post">
        {{csrf_field()}}
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input name='nombre' id='nombre' class="form-control @error('nombre') is-invalid @enderror" value= "{{ old('nombre') }}" placeholder="* Nombre completo" type="text" required>
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-list"></i></span>
            </div>
            <select name='tipo' id='tipo' class="form-control @error('tipo') is-invalid @enderror">
                <option disabled selected>* Seleccione el tipo de persona</option>
                <option value="natural">Persona natural</option>
                <option value="juridica">Persona jurídica</option>
            </select>
            @error('tipo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            <input name='numero' id='numero' class="form-control @error('numero') is-invalid @enderror" value= "{{ old('numero') }}"placeholder="* Número de identificación" type="text" required>
            @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
            </div>
            <input name='telefono' id='telefono' class="form-control @error('telefono') is-invalid @enderror" value= "{{ old('telefono') }}" placeholder="* Número de teléfono" type="text" required>
            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input name='email' id='email' class="form-control @error('email') is-invalid @enderror" value= "{{ old('email') }}"placeholder="Correo electrónico" type="text">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="roll" id='roll' value="cliente">
        <br>
        <button type="submit" class="btn btn-primary">Registrar Cliente</button>
        <div class="texto_campos">Los campos con (*) son obligatorios</div>
        <br>
    </form>
@endsection
