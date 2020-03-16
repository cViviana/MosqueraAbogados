<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="img/favicon-1.png" type="image/png">
	<title>@yield('titulo') | Mosquera Abogados</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body class="body_admin row">
        <div class="col-sm-3 col-md-3 col-lg-2 col-xl-1">
            <div class="nav-side-menu" id="menuPrincipal">
                <div class="brand titulo_menu">
                    MOSQUERA ABOGADOS
                </div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content">
                        <li  data-toggle="collapse" data-target="#perfil" class="collapsed active">
                        <a href="#"><i class="fa fa-user"></i> Perfil<span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="perfil">
                            <li class="active"><a href="{{route('perfil_usuario')}}">Ver Perfil</a></li>
                        </ul>

                        <li  data-toggle="collapse" data-target="#casos" class="collapsed">
                        <a href="#"><i class="fa fa-briefcase"></i> Casos <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="casos">
                            <li class="active"><a href="{{route('cargueCaso')}}">Registrar Caso</a></li>
                            <li><a href="">Listar Casos</a></li>

                            <li  data-toggle="collapse" data-target="#documentos" class="collapsed">
                                <a href="#">Documentos<span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="documentos">
                                <li class="active"><a href="#">Subir documento</a></li>
                                <li><a href="#">Listar Documentos</a></li>
                            </ul>

                            <li  data-toggle="collapse" data-target="#tipos" class="collapsed">
                                <a href="#">Tipos documentos<span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="tipos">
                                <li><a href="{{route('crearTipoDocumento')}}">Crear tipo</a></li>
                                <li><a href="#">Listar Tipos</a></li>
                            </ul>

                            <li  data-toggle="collapse" data-target="#ubicacion" class="collapsed">
                                <a href="#">Ubiacacion<span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="ubicacion">
                                <li><a href="{{route('agregarUbicacion')}}">Crear ubicacion</a></li>
                                <li><a href="#">Listar Ubicaciones</a></li>
                            </ul>
                        </ul>

                        <li data-toggle="collapse" data-target="#clientes" class="collapsed">
                        <a href="#"><i class="fa fa-users"></i> Clientes <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="clientes">
                            <li><a href="{{route('registrarCliente')}}"> Registrar Cliente</a></li>
                            <li><a href="{{route('listarClientes')}}">Listar Clientes</li>
                        </ul>
                        <li data-toggle="collapse" data-target="#contraparte" class="collapsed">
                        <a href="#"><i class="fa fa-users"></i> Contrapartes <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="contraparte">
                            <li>Registrar Contraparte</li>
                            <li>Listar Contrapartes</li>
                        </ul>
                        <footer class="footer">
                            <div class="sidebar-footer hidden-small text-center" align="center">
                                <button type="button" class="btn btn-default " data-toggle="tooltip" data-placement="top" title="Cerrar Sesion" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" align="center" style="width:50px; height:30px">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true" style="width:100%;"></span>
                                </button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </div>
                        </footer>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-10 col-xl-11">
            @yield('seccion')
        </div>
</body>
