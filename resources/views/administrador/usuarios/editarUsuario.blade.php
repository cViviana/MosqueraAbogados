@extends('diseño-base.plantilla-registrar')
@section("resaltar-usuarios", "active")
@section("resaltar-listarUsuarios", "active")

@section('titulo','Información de Usuarios')
@section('titulo-formulario', "ACTUALIZAR DATOS DEL USUARIO")

@section('formulario')
<br>
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-center h-100">
            <div class="card-body">

                <form method="POST" action="{{ route('actualizarUsuario') }}">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                        </div>
                        <input id="cedula" type="" readonly="readonly" placeholder="* Cédula" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ $User->cedula }}" required autocomplete="cedula" autofocus>
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
                        <input id="nombre" type="text" placeholder="* Nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $User->nombre }}" required autocomplete="nombre" autofocus>
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
                        <input id="telefono" type="text" placeholder="* Teléfono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $User->telefono }}" required autocomplete="telefono" autofocus>
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
                        <input id="email" type="email" placeholder="* Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $User->email }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-12 align-items-center">
                            <button type="submit" class="btn btn-primary text-center ">
                                {{ __('Actualizar Usuario') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
