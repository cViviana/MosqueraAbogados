@extends('diseño-base.plantilla-usuario-general')

@section('titulo','Inicio')
@section('resaltar-home','active')

@section('home')
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area overlay">
			<div class="banner_inner">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner_content">
							<h2>
								MOSQUERA<br>
								ABOGADOS<br>
							</h2>
							<p>
								"Las buenas costumbres, y no la fuerza, son las columnas de las leyes;
								y el ejercicio de la justicia es el ejercicio de la libertad."
							</p>
							<a class="primary-btn text-uppercase" href="{{route('contacto')}}">Agenda tu Cita</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Home Banner Area =================-->

		<div class="container">
			<div class="h2">
				MISION Y VISION
			</div>
		</div>

		<!--================ Start service Area =================-->
		<section class="service-area section_gap">
			<div class="container"></div>

				<div class="row justify-content-center">
					<!-- single service -->
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-service">
							<div class="service-thumb">
								<img class="img-fluid" src="img/service/service1.jpg" alt="">
							</div>
							<div class="service-details">
								<h5><a href="#">MISION</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
									aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
									aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
									aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					<!-- single service -->
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-service">
							<div class="service-thumb">
								<img class="img-fluid" src="img/service/service2.jpg" alt="">
							</div>
							<div class="service-details">
								<h5><a href="#">VISION</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
									aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
									aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
									aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End service Area =================-->

		<!--================ Start Features Area =================-->
		<section class="features_area" id="features_counter">
			<div class="container">
				<div class="row counter_wrapper">
					<!-- single feature -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_feature">
							<div class="thumb">
								<img src="img/features/1.png" alt="">
							</div>
							<div class="info-content">
								<h4><span class="counter">596</span>+</h4>
								<p>Qualified Lawyer</p>
							</div>
						</div>
					</div>
					<!-- single feature -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_feature">
							<div class="thumb">
								<img src="img/features/2.png" alt="">
							</div>
							<div class="info-content">
								<h4><span class="counter">20650</span>+</h4>
								<p>Solved Cases</p>
							</div>
						</div>
					</div>
					<!-- single feature -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_feature">
							<div class="thumb">
								<img src="img/features/3.png" alt="">
							</div>
							<div class="info-content">
								<h4><span class="counter">2.5</span>k</h4>
								<p>Trusted Clients</p>
							</div>
						</div>
					</div>
					<!-- single feature -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_feature">
							<div class="thumb">
								<img src="img/features/4.png" alt="">
							</div>
							<div class="info-content">
								<h4><span class="counter">50</span>+</h4>
								<p>Achievements</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Features Area =================-->
	<!--================ End Features Area =================-->
	<div class="container">
		<div class="h2">
			NUESTROS SERVICIOS
		</div>
	</div>
	<!--================ Start service Area =================-->
	<section class="service-area section_gap">
		<div class="container">

			<div class="row justify-content-center">
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service1.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Derecho Familiar</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service2.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Derecho Laboral</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service3.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Derecho Penal</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End service Area =================-->
	<div class="container">
		<div class="h2">
			NUESTROS PROFESIONALES
		</div>
	</div>
	<!--================ Start Team Area =================-->
		<section class="section_gap team-area">
			<div class="container">
				<div class="row justify-content-center">
					<!-- single-team-member -->
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single_member">
							<div class="author">
								<img class="img-fluid" src="img/team/team1.jpg" alt="">
							</div>
							<div class="author_decs">
								<h5>Pedro</h5>
								<p class="profession">Senior Barrister at law</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					<!-- single-team-member -->
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single_member">
							<div class="author">
								<img class="img-fluid" src="img/team/team2.jpg" alt="">
							</div>
							<div class="author_decs">
								<h5>Juan</h5>
								<p class="profession">Senior Barrister at law</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					<!-- single-team-member -->
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single_member">
							<div class="author">
								<img class="img-fluid" src="img/team/team3.jpg" alt="">
							</div>
							<div class="author_decs">
								<h5>Luis</h5>
								<p class="profession">Senior Barrister at law</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!--================ End Team Area =================-->
@endsection