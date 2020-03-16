@extends('diseño-base.plantilla-usuario-general')

@section('titulo','Noticias')
@section('resaltar-noticias','active')

@section('noticias')
	<!--================ Start Home Banner Area =================-->
    <div class="container">
		<div class="h2">
			NOTICIAS DE INTERES
		</div>
	</div>
	<!--================ End Home Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Actualidad</h5>
                                </a>
                                <div class="border_line"></div>
                                <p> Enterate de los hechos actuales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Politica</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Se parte de la politica</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Consultorio</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Enterate de nuestras noticias</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Actualidad,</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">19 Dic, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-1.jpeg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Ciencia que frena la labor de los ‘rompevidrios’</h2>
                                        </a>
                                        <p>Agazapados en la oscuridad de la noche o, incluso, a plena luz del día, 
                                        las bandas de ‘rompevidrios’ son el terror de los conductores en las intersecciones 
                                        y calles bogotanas. Valiéndose de bujías, piedras, trozos de loza o hasta cachas 
                                        de revólver, estos delincuentes se introducen con gran violencia en los automóviles 
                                        para sustraer, en pocos segundos, las pertenencias de sus víctimas..</p>
                                        <a href="{{route('noticia-1')}}" class="blog_btn">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Politica,</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">15 Dic, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-2.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>La Colombia que se cansó de los extremos políticos</h2>
                                        </a>
                                        <p>Colombia vive un cambio sustancial y así se demostró en las elecciones regionales de 2019. 
                                        Los resultados evidenciaron que los colombianos se están alejando de los extremos políticos 
                                        que durante décadas han reinado en la agenda pública y decidieron inclinarse por los candidatos 
                                        de centro y centroizquierda, y que abanderaron la lucha contra la corrupción..</p>
                                        <a href="single-blog.html" class="blog_btn">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Consultorio,</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">02 Dec, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-3.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Mosquera Abogados llega a las plataformas digitales</h2>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								        aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
								        aliqua enim minim veniam quis nostrud. Lorem ipsum dolor sit amet.</p>
                                        <a href="single-blog.html" class="blog_btn">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Control de paginas de navegacion -->
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item "><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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