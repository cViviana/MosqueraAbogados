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
							<p>Carrera 2 # 3 - 88</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">3122894693</a></h6>
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
					<form class="row contact_form" action="mail" method="post" id="contactForm" novalidate="novalidate">
						{{ csrf_field() }}
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'">
							</div>
							<div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su correo'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingresar Asunto"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresar Asunto'">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="mensaje" id="mensaje" rows="1" placeholder="Añadir Mensaje"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Añadir Mensaje'"></textarea>
							</div>
						</div>

						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn text-uppercase">Agendar Cita</button>
						</div>
					</form>
				</div>
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