@extends('diseño-base.plantilla-base')

@section('titulo','Servicios')
@section('resaltar-servicios','active')

@section('servicios')
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="/">Inicio</a>
                        <a href="{{route('servicios')}}">Nuestros Servicios</a>
                    </div>
                    <h2>Nuestros Servicios</h2>
                </div>
            </div>
        </div>
    </section>
	<!--================End Home Banner Area =================-->
    
	<!--================ Start service-2 Area =================-->
	<section class="service-area-2 section_gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6">
					<div class="service-2-left">
						<div class="get-know">
							<p class="df-color">Servicio Destacado</p>
							<h1>Asesoria Empresarial</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud.</p>
						</div>
						<div class="author-lacture">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod
								tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet,
								consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis
								nostrud.</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="service-2-right">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="left-image">
										<div class="s-img"><img class="img-fluid" src="img/service/service4.jpg" alt=""></div>
										<div class="s-img"><img class="img-fluid" src="img/service/service5.jpg" alt=""></div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="right-image">
									<div class="s-img"><img class="img-fluid" src="img/service/service6.jpg" alt=""></div>
									<div class="s-img"><img class="img-fluid" src="img/service/service7.jpg" alt=""></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End service-2 Area =================-->
    <div class="h2">
        NUESTROS SERVICIOS
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
@endsection