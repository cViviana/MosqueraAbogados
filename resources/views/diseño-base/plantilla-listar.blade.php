@extends('diseño-base.plantilla-admin')

@section('seccion')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">LISTADO</h6>
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
            
        </table>
        <br>
    </div>
@endsection