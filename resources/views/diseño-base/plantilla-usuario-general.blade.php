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
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{route('inicio')}}"><img src="{{ asset('img/logo-2.png')}}"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item @yield('resaltar-home')"><a class="nav-link" href="{{route('inicio')}}">Inicio</a></li>
							<li class="nav-item @yield('resaltar-nosotros')"><a class="nav-link" href="{{route('nosotros')}}">Nuestra Firma</a></li>
							<li class="nav-item @yield('resaltar-servicios')"><a class="nav-link" href="{{route('servicios')}}">Nuestros Servicios</a></li>
                            <li class="nav-item @yield('resaltar-profesionales')"><a class="nav-link" href="{{route('profesionales')}}">Nuestros Profesionales</a></li>
                            <li class="nav-item @yield('resaltar-contacto')"><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
							<li class="nav-item @yield('resaltar-inicio-sesion')"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a></li>
						</ul>
						<ul class="nav navbar-nav ml-auto">
							<div class="social-icons d-flex align-items-center">
								<a href="">
									<li><i class="fa fa-facebook"></i></li>
								</a>
								<a href="">
									<li><i class="fa fa-twitter"></i></li>
								</a>
							</div>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================ End Header Menu Area =================-->

    @yield('home')
    @yield('nosotros')
	@yield('servicios')
    @yield('profesionales')
	@yield('contacto')
	@yield('correo')
    @yield('registrar-proceso-judicial')

     <!--================  start footer Area =================-->
	<footer class="footer-area">
		<div class="footer_top section_gap_top">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">Sobre Mosquera Abogados</h5>
							<p class="about-text">
                                Telefono: 3122894693<br>
                                Direccion: Carrera 2 # 3 - 88
                            </p>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">Enlaces de navegacion</h5>
							<div class="row">
								<div class="col-5">
									<ul class="list">
										<li><a href="{{route('inicio')}}">Inicio</a></li>
										<li><a href="{{route('nosotros')}}">Nuestra Firma</a></li>
									</ul>
								</div>
								<div class="col-5">
									<ul class="list">
                      <li><a href="{{route('servicios')}}">Nuestros Servicios</a></li>
										<li><a href="{{route('profesionales')}}">Nuestros Profesionales</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<span>Copyright &copy; Smart Software Solutions</span>
					</div>
					<div class="col-lg-6 col-md-12 text-right">
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
