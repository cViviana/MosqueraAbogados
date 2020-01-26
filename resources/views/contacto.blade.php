<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon-1.png" type="image/png">
	<title>MOSQUERA ABOGADOS</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Buscar">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="img/logo-2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('nosotros')}}">Nuestra Firma</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('servicios')}}">Nuestros Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('profesionales')}}">Nuestros Profesionales</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('noticias')}}">Noticias</a></li>
							<li class="nav-item active"><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
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
							<li class="nav-item"><a href="#" class="search">
								<i class="lnr lnr-magnifier" id="search"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<div class="page_link">
						<a href="/">Inicio</a>
						<a href="{{route('contacto')}}">Contacto</a>
					</div>
					<h2>Contactenos</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap">
		<div class="container">
            
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Popayan Cauca - Colombia</h6>
							<p>Centro Edificio N° 501</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">8234565</a></h6>
							<p>Lunes a Viernes 8am a 6 pm</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">mosquera_abogados@gmail.com</a></h6>
							<p>¡Envíenos su consulta en cualquier momento!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'">
							</div>
							<div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su correo'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Ingresar Asunto"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresar Asunto'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Añadir Mensaje"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Añadir Mensaje'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn text-uppercase">Agendar Cita</button>
						</div>
					</form>
				</div>
            </div>
            
            <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
			    sdata-mlat="40.701083" data-mlon="-74.1522848">
			</div>

		</div>
	</section>
	<!--================Contact Area =================-->

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
                                Telefono: 8234565 <br>
                                Celular: 3185476266<br>
                                Direccion: Centro Edificio N° 501
                            </p>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">Enlaces de navegacion</h5>
							<div class="row">
								<div class="col-5">
									<ul class="list">
										<li><a href="#">Inicio</a></li>
										<li><a href="#">Nuestra Firma</a></li>
									</ul>
								</div>
								<div class="col-5">
									<ul class="list">
                                        <li><a href="#">Nuestros Servicios</a></li>
										<li><a href="#">Nuestros Profesionales</a></li>
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
						<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							Proyecto I
						</p>
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

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->

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