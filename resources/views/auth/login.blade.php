@extends('layouts.app')

@section('content')
<div class="body_login">
<div class="container_login">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <br>
                <h3>Iniciar Sesión</h3>
                <h3>Mosquera Abogados</h3>
            </div>
            <div class="card_login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input id="email" type="email" placeholder="* Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                        <input id="password" type="password" placeholder="* Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn login_btn">
                                {{ __('Iniciar Sesión') }}
                            </button>
                        </div>
                    </div>
                    <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Has olvidado tu contraseña?') }}
                            </a>
                        @endif
                        
                    </div>
                    <div class="texto_campos d-flex justify-content-center">
                        Los campos con (*) son obligatorios
                        <br>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
