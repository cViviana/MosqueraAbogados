@extends('diseño-base.plantilla-registrar')
@section("resaltar-usuarios", "active")
@section("resaltar-listarUsuarios", "active")

@section('titulo','Editar un usuario')

@section('titulo-formulario', "CAMBIAR CONTRASEÑA")

@section('formulario')
<br>
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-center h-100">
            <div class="card-body">
                
                <form method="POST" action="{{ route('cambiarContraseña') }}">
                    @csrf

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input id="passwordOld" type="password" placeholder="* Antigua Contraseña" class="form-control @error('password') is-invalid @enderror" name="passwordOld" required autocomplete="new-password">
                        @error('mensajeContraseñaIncorrecta')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input id="passwordNew" type="password" placeholder="* Nueva Contraseña" class="form-control @error('password') is-invalid @enderror" name="passwordNew" required autocomplete="new-password">
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
                                {{ __('Cambiar Contraseña') }}
                            </button>
                        </div>
                    </div>

                    
                </form>
                
            </div>
        </div>
    </div>
@endsection