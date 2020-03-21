@extends('diseño-base.plantilla-admin')

@section('seccion')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield("titulo-listar")</h6>
        </div>

        <div id="contenedorMensajes">
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