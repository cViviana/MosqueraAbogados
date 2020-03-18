@extends('diseño-base.plantilla-admin')

@section('seccion')
    <div class="container_pagina">
        <div class="texto_titulo">@yield("titulo-formulario")</div>

        <div class="container_formulario" id="contenedorMensajes">
            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield("contenedor-mensajes")
        </div>
        
        <div class="container_formulario">
            <div class="mascara">
                @yield("formulario")
            </div>
        </div>
    </div>
@endsection
