@extends('diseño-base.plantilla-admin')

@section('seccion')
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
        @if (session()->has('men'))
            <div class="alert alert-success animated fadeIn">
                {{session('men')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @yield("contenedor-mensajes")
    </div>
    
    <div class="container_formulario">
        <div class="mascara">
            @yield("formulario")
        </div>
    </div>
@endsection
