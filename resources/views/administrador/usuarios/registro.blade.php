@extends('diseño-base.plantilla-registrar')
@section("resaltar-usuarios", "active")
@section("resaltar-registrarUsuario", "active")

@section('titulo','Información de Usuarios')
@section('titulo-formulario', 'REGISTRAR USUARIOS')

@section("contenedor-mensajes")
    @if (session()->has('contraseñas_diferentes'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('contraseñas_diferentes')}}
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
@endsection

@section('formulario')
    <p class="text-center m-0 font-weight-bold text-primary">Crear cuenta de</p>
    <p>
    <h4 class="text-center m-0 font-weight-bold text-primary">
        MOSQUERA 
        <br> 
        ABOGADOS
    </h4>
    <p class="divider-text">
        <span class="bg-light"></span>
    </p>
            
    <form method="POST" action="{{ route('guardarUsuario') }}">
        @csrf
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
            </div>
            <input id="cedula" type="" placeholder="* Número de identificación" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>
            @error('cedula')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input id="nombre" type="text" placeholder="* Nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <input id="telefono" type="text" placeholder="* Teléfono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input id="email" type="email" placeholder="* Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input id="password" type="password" placeholder="* Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input id="password-confirm" type="password" placeholder="* Confirmar Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-12 align-items-center">
                <button type="submit" class="btn btn-primary text-center ">
                    {{ __('Crear Cuenta') }}
                </button>
            </div>
        </div>
    </form>
@endsection
