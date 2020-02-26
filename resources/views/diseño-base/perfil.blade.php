<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon-1.png" type="image/png">
	<title>Mosquera Abogados | @yield('titulo')</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body class="body_admin">
<div class="nav-side-menu" id="menuPrincipal">
        <div class="brand titulo_menu">
            MOSQUERA ABOGADOS
        </div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">

                <li  data-toggle="collapse" data-target="#perfil" class="collapsed active">
                <a href="#"><i class="fa fa-user"></i> Perfil<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="perfil">
                    <li class="active"><a href="#">Ver Perfil</a></li>
                    <li><a href="#">Cerrar Sesion</a></li>
                </ul>

                <li  data-toggle="collapse" data-target="#casos" class="collapsed">
                <a href="#"><i class="fa fa-briefcase"></i> Casos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="casos">
                    <li class="active"><a href="{{route('crearCaso')}}">Registrar Caso</a></li>
                    <li><a href="">Listar Casos</a></li>

                    <li  data-toggle="collapse" data-target="#documentos" class="collapsed">
                        <a href="#">Documentos<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="documentos">
                        <li class="active"><a href="#">Subir documento</a></li>
                        <li><a href="#">Crear tipo</a></li>
                        <li><a href="#">Crear ubicacion</a></li>
                    </ul>
                </ul>

                <li data-toggle="collapse" data-target="#clientes" class="collapsed">
                <a href="#"><i class="fa fa-users"></i> Clientes <span class="arrow"></span></a>
                </li>
                    <ul class="sub-menu collapse" id="clientes">
                    <li>Registrar Cliente</li>
                    <li>Listar Clientes</li>
                </ul>
                <li data-toggle="collapse" data-target="#contraparte" class="collapsed">
                <a href="#"><i class="fa fa-users"></i> Contrapartes <span class="arrow"></span></a>
                </li>
                    <ul class="sub-menu collapse" id="contraparte">
                    <li>Registrar Contraparte</li>
                    <li>Listar Contrapartes</li>
                </ul>
            </ul>
        </div>
    </div>
		<footer>
			<div class="sidebar-footer hidden-small text-center" align="center">
							<button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Logout" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();" align="center" style="width:80px; height:40px">
								<span class="glyphicon glyphicon-off" aria-hidden="true" style="width:100%;"></span>
							</button>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
							</form>
						</div>
		</footer>
    @yield('perfil')
    @yield('registrar-proceso-judicial')
    @yield('registrarCliente')
    @yield('registrarContraparte')
    @yield('subirDocumento')
    @yield('crartipodocumento')
</body>
