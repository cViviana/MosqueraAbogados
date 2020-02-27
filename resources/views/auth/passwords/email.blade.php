@extends('layouts.app')

@section('content')
<div class="container_login">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Recuperar Contraseña</h3>
                <h3>Mosquera Abogados</h3>
            </div> 
            <div class="card_login">
                
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="texto_recuperarcontraseña">
                    Ingrese el correo electronico con el que se registro <br>
                </div>
                <form class="texto_recuperarcontraseña" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input id="email" type="email" placeholder="* Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row mb-0 ">
                        <div class="col-md-4 offset-md-4">
                            <button type="submit" class="btn float-center login_btn">
                                {{ __('Enviar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

@endsection
