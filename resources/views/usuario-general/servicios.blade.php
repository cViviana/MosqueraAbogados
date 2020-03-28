@extends('diseño-base.plantilla-usuario-general')

@section('titulo','Servicios')
@section('resaltar-servicios','active')

@section('servicios')
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{route('inicio')}}">Inicio</a>
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
							<h1>Derecho Comercial</h1>
							<p>El derecho comercial es aquel grupo o conjunto de leyes y regulaciones que se establecen 
								en el ámbito económico para controlar justamente el tipo de relaciones o vínculos que se puedan 
								dar entre dos o más partes con fines comerciales y de intercambio económico. El derecho comercial 
								es un tipo de derecho particular que agrupa cuestiones administrativas y legales con procedimientos 
								fiscales y económicos por lo cual es bastante amplio en comparación con otros tipos de derecho más 
								resumidos o delimitados. .</p>
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
									<div class="s-img"><img class="img-fluid" src="img/service/service8.jpg" alt=""></div>
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
                            <h5><a href="#">Derecho de Seguros</a></h5>
							<p>Parte de las normas que regulan el contrato de seguro pertenecen al 
								derecho público, aquellas sobre el control administrativo de la actividad 
								reguladora, y parte al derecho privado, aquellas que regulan el contrato de seguro.</p>
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
                            <h5><a href="#">Derecho Empresarial Integral</a></h5>
                            <p>Permita el desarrollo de competencias para la comprensión y la solución de problemas 
								particulares de carácter disciplinario e interdisciplinario para la apropiación de 
								metodologías que permitan el abordaje de problemas de investigación aplicada en el 
								contexto de la comunidad empresarial.</p>
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
                            <h5><a href="#">Derecho Comercial</a></h5>
                            <p>El derecho comercial es aquel grupo o conjunto de leyes y regulaciones que se establecen 
								en el ámbito económico para controlar justamente el tipo de relaciones o vínculos que se puedan 
								dar entre dos o más partes con fines comerciales y de intercambio económico. El derecho comercial 
								es un tipo de derecho particular que agrupa cuestiones administrativas y legales con procedimientos 
								fiscales y económicos por lo cual es bastante amplio en comparación con otros tipos de derecho más 
								resumidos o delimitados. .</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img class="img-fluid" src="img/service/service9.jpg" alt="">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Derecho Civil</a></h5>
                            <p>Es una rama del Derecho en general, como conjunto de normas jurídicas, que trata de las relaciones 
                                entre civiles o particulares, sin intervención del Estado como persona de Derecho Público, ya que 
                                el Derecho Civil integra el llamado Derecho Privado. Las personas jurídicas privadas están también 
                                comprendidas en su ámbito, mientras que las públicas, sólo si actúan en un plano de igualdad con los 
                                particulares.</p>
                        </div>
                    </div>
                </div>
                <!-- single service -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img class="img-fluid" src="img/service/service10.jpg" alt="">
                        </div>
                        <div class="service-details">
                            <h5><a href="#">Derecho Administrativo</a></h5>
                            <p>constituye una rama del derecho público interno, la cual se encarga de  regular 
                                la administración pública a través de un conjunto de estructuras, normas jurídicas 
                                y principios doctrinales, se caracteriza por ser común y aplicable a todas las 
                                actividades relacionadas con la administración pública. Además puede ser un derecho 
                                nacional o relacionarse con los derechos provinciales o territoriales, esto depende 
                                de la organización del estado que puede ser unitaria o federal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================ End service Area =================-->
@endsection