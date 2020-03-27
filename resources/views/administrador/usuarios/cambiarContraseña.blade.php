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
                
                <form method="POST" action="---">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                        </div>
                        <input id="cedula" type="" readonly="readonly" placeholder="* Cedula" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="---" required autocomplete="cedula" autofocus>
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
                        <input id="nombre" type="text" readonly="readonly" placeholder="* Nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="---" required autocomplete="nombre" autofocus>
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input id="email" type="email" readonly="readonly" placeholder="* Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="----" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input id="telefono" type="text" readonly="readonly" placeholder="* Telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="-----" required autocomplete="telefono" autofocus>
                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input id="password" type="password" placeholder="* Nueva Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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