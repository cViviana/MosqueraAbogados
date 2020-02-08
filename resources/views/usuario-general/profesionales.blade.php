@extends('diseño-base.plantilla-base')

@section('titulo','Profesionales')
@section('resaltar-profesionales','active')

@section('profesionales')
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="/">Inicio</a>
                        <a href="{{route('profesionales')}}">Nuestros Profesionales</a>
                    </div>
                    <h2>Nuestros Profesionales</h2>
                </div>
            </div>
        </div>
    </section>
	<!--================End Home Banner Area =================-->

	<!--================ Start Team Area =================-->
	<section class="section_gap team-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Conoce a nuestro equipo experimentado</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<!-- single-team-member -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img class="img-fluid" src="img/team/team1.jpg" alt="">
						</div>
						<div class="author_decs">
							<h5>Juan</h5>
							<p class="profession">Senior Barrister at law</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p>
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
							<h5>Pedro</h5>
							<p class="profession">Senior Barrister at law</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p>
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
							aliqua enim minim veniam quis nostrud.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img class="img-fluid" src="img/team/team1.jpg" alt="">
						</div>
						<div class="author_decs">
							<h5>David</h5>
							<p class="profession">Senior Barrister at law</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p>
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
							<h5>Benjamin</h5>
							<p class="profession">Senior Barrister at law</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p>
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
							<h5>Daniel</h5>
							<p class="profession">Senior Barrister at law</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Team Area =================-->
@endsection