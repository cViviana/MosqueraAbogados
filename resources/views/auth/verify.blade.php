@extends('layouts.app')

@section('content')
<div class="container_login">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Verifique su dirección de correo electrónico</h3>
            </div>

            <div class="card_login">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico...') }}
                    </div>
                @endif

                {{ __('Antes de continuar, revise su correo electrónico para obtener un enlace de verificación.') }}
                {{ __('Si no recibiste el correo electrónico') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haga clic aquí para solicitar de nuevo') }}</button>.
                </form>
            </div>
        
        </div>
    </div>
</div>
@endsection
