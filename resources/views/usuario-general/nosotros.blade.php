@extends('diseño-base.plantilla-usuario-general')

@section('titulo','Nosotros')
@section('resaltar-nosotros','active')

@section('nosotros')
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{route('inicio')}}">Inicio</a>
                        <a href="{{route('nosotros')}}">Nuestra Firma</a>
                    </div>
                    <h2>Nuestra Firma</h2>
                </div>
            </div>
        </div>
    </section>
	<!--================End Home Banner Area =================-->
	<div class="container">
		<div class="h2">
			MISION Y VISION
		</div>
	</div>
	<!--================ Start service Area =================-->
	<section class="service-area section_gap">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service1.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">MISION</a></h5>
							<p>Mosquera abogados es un firma especializada en Derecho Comercial , Derecho de Seguros,
                 			   Derecho Empresarial Integral, Derecho Civil y Derecho Administrativo. Al brindar estos servicios
                			   buscamos trabajar con excelencia y calidad, de esta manera construimos una relación de confianza con
							   nuestros clientes para que así estén seguros  de dejar sus casos en nuestras manos
							</p>
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
							<p>Convertirnos en la mejor firma de Abogados reconocida en la cuidad de Popayán, por la calidad de los servicios
								prestados, para así ser tomados como referencia en el sector que nos desempeñamos. Esto lo lograremos teniendo
								en cuenta siempre la satisfacción del cliente y la buena atención
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End service Area =================-->

    <!--================ Start Features Area =================-->
	<section class="features_area" id="features_counter">
        <div class="h2">
			<br>INDICADORES
		</div>
        <div class="container">
			<div class="row counter_wrapper">
				<!-- single feature -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_feature">
						<div class="thumb">
							<img src="img/features/1.png" alt="">
						</div>
						<div class="info-content">
							<h4><span class="counter">3</span>+</h4>
							<p>Abogados calificados</p>
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
							<h4><span class="counter">100</span>+</h4>
							<p>Casos Solucionados</p>
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
							<h4><span class="counter">100</span>+</h4>
							<p>Clientes Satisfechos</p>
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
							<p>Logros</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->
@endsection
