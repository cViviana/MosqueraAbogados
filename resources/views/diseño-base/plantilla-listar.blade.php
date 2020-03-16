@extends('diseño-base.plantilla-admin')

@section('seccion')
    <div class="container_pagina">
        <div class="texto_titulo">@yield('titulo-listar')</div>
        <table class="table table-responsive tabla table-hover">
            <thead class="thead-light container_formulario">
                <tr>
                    @yield("nombre-campos-columnas")
                </tr>
            </thead>
            <tbody class="container_formulario">
                    @yield("listado-columnas")
            </tbody>
        </table>
        <br>
    </div>
@endsection