@extends('diseño-base.plantilla-usuario-general')
@section('titulo','Contacto')
@section('resaltar-contacto','active')

@section('contacto')
	<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<div class="page_link">
						<a href="{{route('inicio')}}">Inicio</a>
						<a href="{{route('contacto')}}">Contacto</a>
					</div>
					<h2>Contáctenos</h2>
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
							<h6>Popayán Cauca - Colombia</h6>
							<p>Carrera 2 # 3 - 88</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">3122894693</a></h6>
							<p>Lunes a Viernes 8 a.m. a 6 p.m.</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">abogados.firma.mosquera@gmail.com</a></h6>
							<p>¡Envíenos su consulta en cualquier momento!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div>
						@if (session()->has('mensaje'))
							<div class="alert alert-success animated fadeIn">
								{{session('mensaje')}}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif
					</div>
					<form class="row contact_form" action="mail" method="post" id="contactForm">
						{{ csrf_field() }}
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'" required>
							</div>
							<div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su correo'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresar su telefono"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su teléfono'" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingresar Asunto"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese un asunto'"required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" name="mensaje" id="mensaje" rows="1" placeholder="Añadir Mensaje"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Añadir Mensaje'" required></textarea>
							</div>
						</div>

						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn text-uppercase">Agendar Cita</button>
						</div>
					</form>
				</div>
			</div>
			<div class="mapBox text-center"> 
				<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.1971534974596!2d-76.60445958590995!3d2.4412833577784587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e300305f48b2eb3%3A0xa7ad8e3d77634c51!2sCra.%202%20%233-88%2C%20Popay%C3%A1n%2C%20Cauca!5e0!3m2!1ses!2sco!4v1585376736745!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
           
		</div>
	</section>
	<!--================Contact Area =================-->

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Gracias</h2>
					<p>Su mensaje ha sido enviado</p>
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
					<h2>Lo sentimos </h2>
					<p> Algo salió mal</p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->
@endsection