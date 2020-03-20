@extends('diseño-base.plantilla-admin')
@section('seccion')
    <div class="">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PERFIL DE USUARIO</h6>
        </div>
        <div class="card-header">
            <div class="m-0 font-weight-bold text-primary">
                Bienvenido a
                <br>
                MOSQUERA ABOGADOS
            </div>
        </div>
        <div class="card-header">
            <div>
                <img src="../img/profile.png" alt=""/> <h6> O QUE HACEMOS
                    
                </h6>
        
            </div>
            
        
                <div class="row">
                    <div class="col-md-12 texto_perfil">

                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                            <div>
                                 Nombre: {{ Auth::user()->nombre }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                Correo:{{ Auth::user()->email}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                Telefono:{{ Auth::user()->telefono}}
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
