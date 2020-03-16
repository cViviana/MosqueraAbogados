@extends('diseño-base.plantilla-usuario-general')

@section('titulo','Noticias')
@section('resaltar-noticias','active')

@section('noticia-1')

    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="/">Inicio</a>
                        <a href="{{route('noticias')}}">Noticias</a>
                        <a href="{{route('noticia-1')}}">Ciencia que frena la labor de los ‘rompevidrios’</a>
                    </div>
                    <h2>Ciencia que frena la labor de los ‘rompevidrios’</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Actualidad,</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>Ciencia que frena la labor de los ‘rompevidrios’</h2>
                            <p class="excert">
                            Agazapados en la oscuridad de la noche o, incluso, a plena luz del día, las bandas de 
                            ‘rompevidrios’ son el terror de los conductores en las intersecciones y calles bogotanas. 
                            Valiéndose de bujías, piedras, trozos de loza o hasta cachas de revólver, estos delincuentes 
                            se introducen con gran violencia en los automóviles para sustraer, en pocos segundos, 
                            las pertenencias de sus víctimas.
                            </p>
                            <p>
                            Más allá del temor que produce ser objeto de esta modalidad de robo que azota cada vez más 
                            puntos en la ciudad, la violencia con la que actúan estas personas inescrupulosas representa 
                            un verdadero riesgo para la integridad de los conductores, puesto que el impacto contra el 
                            vidrio produce una lluvia de esquirlas filosas que van directo a la cara, cuello, brazos y 
                            torso de los conductores.
                            </p>
                            <p>
                            En respuesta a este flagelo, la ciencia de los materiales de alto desempeño ha diseñado 
                            una solución customizada y asequible en el mercado colombiano: las Películas de Seguridad 
                            para Vidrios de Automóviles de 3M, marca con más de un siglo de experiencia en la industria 
                            automotriz
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                            Según explica Mauricio Montoya, líder de Ingeniería de 3M, este producto es una alternativa 
                            de seguridad pasiva para el vehículo que tiene como objetivo “mantener en una pieza el vidrio 
                            del automóvil, aun cuando se ha fragmentado producto de un golpe ocasionado por un objetivo 
                            contundente”.
                            </div>
                            <p>
                            Es decir que, al presentarse un ataque de este tipo, los trozos de vidrio se van a mantener 
                            unidos gracias al adhesivo que contiene la película de seguridad, con lo cual la superficie 
                            seguirá siendo una barrera que impide el acceso del delincuente al auto luego del impacto. 
                            Así mismo, la resistencia del producto de 3M es tal que permite que el vidrio roto continúe 
                            siendo una barrera hermética contra el agua.
                            </p>

                            <div class="quotes">
                            “Contar con una película de seguridad en su vehículo puede cohibir al delincuente, quien tendrá 
                            que hacer mayor esfuerzo para romper la ventana; lo que puede hacer que abandone su objetivo o, 
                            al notar que el auto cuenta con una película de seguridad, lo evite totalmente antes de proceder 
                            con el intento de robo”, 
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpeg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>
                                    Precisamente, el portafolio de películas para automóviles de 3M también incluye productos especializados 
                                    para el control solar y la reducción de resplandores al volante. A grandes rasgos, estas rechazan hasta el 
                                    60 por ciento de la energía solar que llega a las ventanas, están diseñadas para equilibrar la temperatura 
                                    al interior del vehículo y no contienen metal, por lo que no afectan las señales de telecomunicaciones o GPS 
                                    dentro del auto.
                                    De acuerdo con Montoya, usar una película 3M con protección solar en el vehículo 
                                    equivale a aplicarse un factor de protección solar 1.000 o superior.
                                    </p>
                                    <p>
                                    Esta tecnología se divide en tres grandes familias: la Serie FX disminuye la energía del sol que entra al 
                                    vehículo de manera estándar; la Serie Color Stable, que a partir de películas de nanocarbono mejora la capacidad 
                                    de rechazo de calor; la Serie Crystalline, una avanzada película multicapa más fina que una hoja de papel con la 
                                    mayor capacidad de rechazo de calor disponible en 3M que llegará a Colombia el próximo año; y, por último, 
                                    la Serie Scotchshield, láminas de doble protección, tanto de seguridad como protección de calor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <h4>Pedro</h4>
                            <p>Administrador</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection