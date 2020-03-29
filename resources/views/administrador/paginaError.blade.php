@extends('diseño-base.plantilla-admin')
@section('titulo','Inicio')

@section('seccion')
<div class="text-center">
    <div class="alert alert-danger" role="alert">
        Tu usuario no tiene los permisos para realizar esta función
    </div>
    <div  >
        <span>
        <i class="fa fa-exclamation-triangle fa-6x" aria-hidden="true"></i>
        </span>
    </div>
    <p class="lead text-gray-800 mb-5">
        Página No Encontrada
    </p>
    <p class="text-gray-500 mb-0">
        Lo sentimos, con tu cuenta de usuario no es posible realizar estas funciones.
    </p>
    <p class="text-gray-500 mb-0">
        Si deseas hacer uso de esta funcionalidad ingresa con otra cuenta <br>
        que tenga los permisos necesarios.
    </p>
    <a href="{{route('perfil_usuario')}}">&larr; Volver al perfil de usuario</a>

</div>

@endsection
