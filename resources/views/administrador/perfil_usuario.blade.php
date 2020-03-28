@extends('diseño-base.plantilla-admin')
@section('titulo','Inicio')


@section('seccion')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenido</h1>
        <a href="vistaCambioContraseña" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-key fa-sm text-white-50"></i> Cambiar Contraseña</a>
    </div>
    <div class="row">
        <!-- Nombre perfil -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Nombre :
                        </div>
                        <div class="h mb-0 font-weight-bold text-gray-800">
                        {{ Auth::user()->nombre }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cedula perfil -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Cédula:
                        </div>
                        <div class="h mb-0 font-weight-bold text-gray-800">
                        {{ Auth::user()->cedula }}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Correo -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Correo Electrónico:
                            </div>
                            <div class="h mb-0 font-weight-bold text-gray-800">
                                {{ Auth::user()->email}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Telefono -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Teléfono:
                            </div>
                            <div class="h mb-0 font-weight-bold text-gray-800">
                                {{ Auth::user()->telefono}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-phone fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Servicios de la aplicación</h6>
                </div>
                <div class="card-body">
                    Explora y conoce las funcionalidades del gestor documental de MOSQUERA ABOGADOS
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 border-left-success">
                                <h6 class="m-0 font-weight-bold text-primary">Gestionar Procesos Judiciales</h6>
                            </div>
                            <div class="card-body">
                                En la sección de Procesos Judiciales podrás  encontrar funcionalidades como registrar,
                                listar, editar y eliminar casos para llevar un control sobre los casos manejados por la 
                                firma <br> MOSQUERA ABOGADOS.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 border-left-info">
                                <h6 class="m-0 font-weight-bold text-primary">Gestionar Documentación de los Procesos Judiciales</h6>
                            </div>
                            <div class="card-body">
                                En la sección de Documentos podrás  encontrar funcionalidades como subir, listar, editar y eliminar documentos
                                de los casos manejados por la firma MOSQUERA ABOGADOS.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 border-left-warning">
                                <h6 class="m-0 font-weight-bold text-primary">Gestionar Ubicación de la Documentacion</h6>
                            </div>
                            <div class="card-body">
                                En la sección de Documentos podrás  encontrar funcionalidades como registrar, listar, editar y eliminar las ubicaciones 
                                físicas donde se encuentran los documentos físicos de los casos manejados por la firma, además de crear, listar, editar,
                                y eliminar los diferentes tipos de documentos manejados por la firma MOSQUERA ABOGADOS.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 border-left-primary">
                                <h6 class="m-0 font-weight-bold text-primary">Gestionar Clientes</h6>
                            </div>
                            <div class="card-body">
                                En la sección de Documentos podrás  encontrar funcionalidades como registrar, listar, editar y eliminar clientes
                                asociados a la firma <br> MOSQUERA ABOGADOS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
