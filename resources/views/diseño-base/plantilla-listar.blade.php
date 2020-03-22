@extends('diseño-base.plantilla-admin')

@section('seccion')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield("titulo-listar")</h6>
        </div>

        <div id="contenedorMensajes">
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

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        @yield("nombre-campos-columnas")
                        </tr>
                    </thead>
                    <tbody>
                        @yield("listado-columnas")
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
@endsection