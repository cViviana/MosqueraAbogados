@extends('diseño-base.plantilla-base')

@section('nosotros')
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="/">Inicio</a>
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
@endsection