@extends('template.app')
 @section('slider')
	 <!-- Main Slider -->
	 <div id="main-slider" class="carousel slide carousel-fade">

		 <!-- Wrapper for slides -->
		 <div class="carousel-inner" role="listbox">

			 <!-- Item 1 -->
			 <div class="item active">
				 <img src="images/slider/img-01.jpg" alt="">
				 <div class="container">
					 <div class="caption position-center-center text-center h-white p-white">
						 <h1 class="font-playfair animated fadeInUp delay-1">Admicion</h1>
						 <p class="animated fadeInUp delay-2">Nuestra labor activa, cálida, sólida se motiva porque tú eliges ser Exitoso, Innovador, Auto disciplinado y Responsable,<br> de acuerdo a nuestra sociedad moderna y con práctica de valores fundamentales.</p>
						 <ul class="btn-list">
							 <li><a class="btn blue animated fadeInLeft delay-3" href="#">Asegura El futuro de tus Hijos</a></li>
							 <li><a class="btn blank animated fadeInRight delay-3" href="#">Ver Mas</a></li>
						 </ul>
					 </div>
				 </div>
			 </div>
			 <!-- Item 1 -->

			 <!-- Item 1 -->
			 <div class="item">
				 <img src="images/slider/img-02.jpg" alt="">
				 <div class="container">
					 <div class="caption position-center-center text-center h-white p-white">
						 <h1 class="font-playfair animated fadeInUp delay-1">Calidad</h1>
						 <p class="animated fadeInUp delay-2">Lorem ipsum dolor sit amet.</p>
						 <ul class="btn-list">
							 <li><a class="btn blue animated fadeInLeft delay-3" href="#">super</a></li>
							 <li><a class="btn blank animated fadeInRight delay-3" href="#">incrivirse</a></li>
						 </ul>
					 </div>
				 </div>
			 </div>
			 <!-- Item 1 -->

			 <!-- Item 1 -->
			 <div class="item">
				 <img src="images/slider/img-01.jpg" alt="">
				 <div class="container">
					 <div class="caption position-center-center text-center h-white p-white">
						 <h1 class="font-playfair animated fadeInUp delay-1">Education WordPress Theme</h1>
						 <p class="animated fadeInUp delay-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore magna.</p>
						 <ul class="btn-list">
							 <li><a class="btn blue animated fadeInLeft delay-3" href="#">Get Started Now</a></li>
							 <li><a class="btn blank animated fadeInRight delay-3" href="#">Take a Tour</a></li>
						 </ul>
					 </div>
				 </div>
			 </div>
			 <!-- Item 1 -->

		 </div>
		 <!-- Wrapper for slides -->

		 <!-- Nan Control -->
		 <a class="slider-nav next" href="#main-slider" data-slide="prev"><i class="fa fa-long-arrow-right"></i></a>
		 <a class="slider-nav prev" href="#main-slider" data-slide="next"><i class="fa fa-long-arrow-left"></i></a>
		 <!-- Nan Control -->

		 <!-- Indicators -->
		 <ul class="carousel-indicators">
			 <li data-target="#main-slider" data-slide-to="0" class="active"></li>
			 <li data-target="#main-slider" data-slide-to="1"></li>
			 <li data-target="#main-slider" data-slide-to="2"></li>
		 </ul>
		 <!-- Indicators -->

	 </div>
	 <!-- Main Slider -->
 @endsection

@section('main')
	<!-- Main Content -->
	<main class="main-content">

		<!-- Why Chose Us -->
		<section class="why-chose-us tc-padding">
			<div class="container">



				<div class="facts style-2 ">
					<!-- Main Heading -->
					<div class="main-heading-holder">
						<div class="main-heading h-white p-white">
							<h2>Colegio Santa Cecilia</h2>
							<p>Formar niños y jóvenes con sentido crítico y que se caractericen por ser responsables, reflexivos, comunicativos, trabajadores, solidarios y sean agentes activos para la construcción de una sociedad justa y democrática.</p>
						</div>
					</div>
					<!-- Main Heading -->
						<!-- Facts Row -->
						<ul class="row">
							<li class="col-sm-3 col-xs-6 r-full-with">
								<div class="facts-column icon-color-1">
									<i class="fa fa-graduation-cap"></i>
									<h4>Graduación</h4>
									<strong>90%</strong>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6 r-full-with">
								<div class="facts-column icon-color-2">
									<i class="fa fa-briefcase"></i>
									<h4>Trabajo en Equipo</h4>
									<strong>90%</strong>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6 r-full-with">
								<div class="facts-column icon-color-3">
									<i class="fa fa-building-o"></i>
									<h4>Salones de Clases</h4>
									<strong>60+</strong>
								</div>
							</li>
							<li class="col-sm-3 col-xs-6 r-full-with">
								<div class="facts-column icon-color-4">
									<i class="fa fa-users"></i>
									<h4>Estudiantes</h4>
									<strong>1624</strong>
								</div>
							</li>
						</ul>
						<!-- Facts Row -->
				</div>

			</div>
		</section>
		<!-- Why Chose Us -->

		<!-- Our Courses -->
		<section class="our-courses tc-padding">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>Nuestros Talleres</h2>
						<p>.</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- Our Courses -->
				<div class="courses-slider-3">

					<!-- Courses Column -->
					<div class="item">
						<div class="course-column tc-hover">
							<div class="course-img">
								<img src="images/our-courses-1/img-01.jpg" alt="">
							</div>
							<div class="course-detail">
								<span class="date"><i class="fa fa-calendar"></i>December 4, 2016</span>
								<h3><a href="#">Taller de expecion Literaria</a></h3>
								<p>Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius mod.</p>
								<a class="btn blue sm" href="#">Apply<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- Courses Column -->

					<!-- Courses Column -->
					<div class="item">
						<div class="course-column tc-hover">
							<div class="course-img">
								<img src="images/our-courses-1/img-02.jpg" alt="">
							</div>
							<div class="course-detail">
								<span class="date"><i class="fa fa-calendar"></i>December 4, 2016</span>
								<h3><a href="#">Taller de Matematica - Primaria</a></h3>
								<p>Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius mod.</p>
								<a class="btn blue sm" href="#">Apply<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- Courses Column -->

					<!-- Courses Column -->
					<div class="item">
						<div class="course-column tc-hover">
							<div class="course-img">
								<img src="images/our-courses-1/img-03.jpg" alt="">
							</div>
							<div class="course-detail">
								<span class="date"><i class="fa fa-calendar"></i>December 4, 2016</span>
								<h3><a href="#">Chemical Engineering</a></h3>
								<p>Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius mod.</p>
								<a class="btn blue sm" href="#">Apply<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- Courses Column -->

				</div>
				<!-- Our Courses -->

				<!-- Viwe All Button -->
				<div class="col-sm-12 text-center">
					<a class="btn blank dark tc-margin-top" href="#">View All Course</a>
				</div>
				<!-- Viwe All Button -->

			</div>
		</section>
		<!-- Our Courses -->

		<!-- Video Section -->
		<section class="parallax-window video-section" data-parallax="scroll" data-image-src="https://img.youtube.com/vi/Ri2X2-PJUS0/maxresdefault.jpg">
			<div class="video-title-holder">
				<div class="video-titel">
					<div class="youtube" id="Ri2X2-PJUS0">
						<div class="position-center-center">
							<h3>Nuestros <i class="fa fa-play-circle"></i>Ambientes</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Video Section -->

		<!-- Up Comming Eventes -->
		<section class="comming-events tc-padding gray-bg">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>Próximos Eventos</h2>
						<p>Nuestros proximos eventos que se realizaran el el colegio Santa Cecilia.</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- Eventes Row -->
				<div class="row">

					<!-- Event Column -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 r-full-width">
						<div class="event-column z-depth-2">
							<img src="images/events/img-01.jpg" alt="">
							<div class="event-detail overlay">
								<h4>How to speake like a native speaker?</h4>
								<ul>
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-phone"></i>White Palace, Brookyn, NYC</li>
								</ul>
								<a class="circle-btn" href="#">+</a>
							</div>
						</div>
					</div>
					<!-- Event Column -->

					<!-- Event Column -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 r-full-width">
						<div class="event-column z-depth-2">
							<img src="images/events/img-02.jpg" alt="">
							<div class="event-detail overlay">
								<h4>How to speake like a native speaker?</h4>
								<ul>
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-phone"></i>White Palace, Brookyn, NYC</li>
								</ul>
								<a class="circle-btn" href="#">+</a>
							</div>
						</div>
					</div>
					<!-- Event Column -->

					<!-- Event Column -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 r-full-width">
						<div class="event-column z-depth-2">
							<img src="images/events/img-03.jpg" alt="">
							<div class="event-detail overlay">
								<h4>How to speake like a native speaker?</h4>
								<ul>
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-phone"></i>White Palace, Brookyn, NYC</li>
								</ul>
								<a class="circle-btn" href="#">+</a>
							</div>
						</div>
					</div>
					<!-- Event Column -->

					<!-- Event Column -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 r-full-width">
						<div class="event-column z-depth-2 m-0 r-m-bottom">
							<img src="images/events/img-04.jpg" alt="">
							<div class="event-detail overlay">
								<h4>How to speake like a native speaker?</h4>
								<ul>
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-phone"></i>White Palace, Brookyn, NYC</li>
								</ul>
								<a class="circle-btn" href="#">+</a>
							</div>
						</div>
					</div>
					<!-- Event Column -->

					<!-- Event Column -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 r-full-width">
						<div class="event-column z-depth-2 m-0">
							<img src="images/events/img-05.jpg" alt="">
							<div class="event-detail overlay">
								<h4>How to speake like a native speaker?</h4>
								<ul>
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-phone"></i>White Palace, Brookyn, NYC</li>
								</ul>
								<a class="circle-btn" href="#">+</a>
							</div>
						</div>
					</div>
					<!-- Event Column -->

					<!-- Event Column -->
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 r-full-width">
						<div class="event-column z-depth-2 m-0">
							<img src="images/events/img-06.jpg" alt="">
							<div class="event-detail overlay">
								<h4>How to speake like a native speaker?</h4>
								<ul>
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-phone"></i>White Palace, Brookyn, NYC</li>
								</ul>
								<a class="circle-btn" href="#">+</a>
							</div>
						</div>
					</div>
					<!-- Event Column -->

				</div>
				<!-- Eventes Row -->

			</div>
		</section>
		<!-- Up Comming Eventes -->

		<!-- Video Section -->
		<div class="testimonial overlay-dark parallax-window tc-padding" data-parallax="scroll" data-image-src="images/testimonial/testimonial-bg.jpg">
            <!-- Main Heading -->
            <div class="main-heading h-white p-white">
                    <h2>Autoridades</h2>
            </div>
			<div class="container">
				<ul id="testimonil-slider" class="testimonil-slider">
					<li>
						<span>Ps. Orlando Percy Reyes Vivas - Director</span>
						<p>“Mejor que mil días de estudio diligente es un día con un gran maestro.”</p>
					</li>
					<li>
						<span>Lic. Hela Rosa Javier Ramos - Sub-Directora</span>
						<p>“Con esfuerzo y perseverancia podrás alcanzar tus metas.”</p>
					</li>
					<li>
						<span>MgSc., M.A., Ing. Percy Reyes Javier - Coordinador</span>
						<p>“Aprender sin reflexionar es malgastar la energía.”</p>
					</li>
				</ul>
				<div id="testimonil-thumnails" class="testimonil-thumnails">
					<a data-slide-index="0" href="#"><img src="images/director.jpg" alt="" width="80" height="80"></a>
					<a data-slide-index="1" href="#"><img src="images/testimonial/img-03.jpg" alt="" width="80" height="80"></a>
					<a data-slide-index="2" href="#"><img src="images/testimonial/img-02.jpg" alt="" width="80" height="80"></a>
				</div>
			</div>
		</div>
		<!-- Video Section -->

		<!-- From The Blog -->
		<section class="comming-events tc-padding gray-bg">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>Publicaciones</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod tempor incididunt.</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- Blog -->
				<div class="blog-slider">

					<!-- Blog Column -->
					<div class="item">
						<div class="blog-column z-depth-2">
							<img src="images/blog/img-01.jpg" alt="">
							<div class="blog-detail">
								<ul class="meta-post">
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-user"></i>Aaron Dzoan</li>
								</ul>
								<h3>Totam rem aperiam eaque ipsa.</h3>
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								<div class="blog-detail-btm">
									<a class="btn blue sm" href="#">Read more<i class="fa fa-angle-right"></i></a>
									<ul class="like-nd-comment">
										<li><i class="fa fa-heart-o"></i>5</li>
										<li><i class="fa fa-commenting-o"></i>2</li>
									</ul>
								</div>
								<a class="circle-btn" href="#"><i class="fa fa-graduation-cap"></i></a>
							</div>
						</div>
					</div>
					<!-- Blog Column -->

					<!-- Blog Column -->
					<div class="item">
						<div class="blog-column z-depth-2">
							<img src="images/blog/img-01.jpg" alt="">
							<div class="blog-detail">
								<ul class="meta-post">
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-user"></i>Aaron Dzoan</li>
								</ul>
								<h3>Totam rem aperiam eaque ipsa.</h3>
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								<div class="blog-detail-btm">
									<a class="btn blue sm" href="#">Read more<i class="fa fa-angle-right"></i></a>
									<ul class="like-nd-comment">
										<li><i class="fa fa-heart-o"></i>5</li>
										<li><i class="fa fa-commenting-o"></i>2</li>
									</ul>
								</div>
								<a class="circle-btn music" href="#"><i class="fa fa-music"></i></a>
							</div>
						</div>
					</div>
					<!-- Blog Column -->

					<!-- Blog Column -->
					<div class="item">
						<div class="blog-column z-depth-2">
							<img src="images/blog/img-01.jpg" alt="">
							<div class="blog-detail">
								<ul class="meta-post">
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-user"></i>Aaron Dzoan</li>
								</ul>
								<h3>Totam rem aperiam eaque ipsa.</h3>
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								<div class="blog-detail-btm">
									<a class="btn blue sm" href="#">Read more<i class="fa fa-angle-right"></i></a>
									<ul class="like-nd-comment">
										<li><i class="fa fa-heart-o"></i>5</li>
										<li><i class="fa fa-commenting-o"></i>2</li>
									</ul>
								</div>
								<a class="circle-btn" href="#"><i class="fa fa-graduation-cap"></i></a>
							</div>
						</div>
					</div>
					<!-- Blog Column -->

					<!-- Blog Column -->
					<div class="item">
						<div class="blog-column z-depth-2">
							<img src="images/blog/img-01.jpg" alt="">
							<div class="blog-detail">
								<ul class="meta-post">
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-user"></i>Aaron Dzoan</li>
								</ul>
								<h3>Totam rem aperiam eaque ipsa.</h3>
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								<div class="blog-detail-btm">
									<a class="btn blue sm" href="#">Read more<i class="fa fa-angle-right"></i></a>
									<ul class="like-nd-comment">
										<li><i class="fa fa-heart-o"></i>5</li>
										<li><i class="fa fa-commenting-o"></i>2</li>
									</ul>
								</div>
								<a class="circle-btn music" href="#"><i class="fa fa-music"></i></a>
							</div>
						</div>
					</div>
					<!-- Blog Column -->

					<!-- Blog Column -->
					<div class="item">
						<div class="blog-column z-depth-2">
							<img src="images/blog/img-01.jpg" alt="">
							<div class="blog-detail">
								<ul class="meta-post">
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-user"></i>Aaron Dzoan</li>
								</ul>
								<h3>Totam rem aperiam eaque ipsa.</h3>
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								<div class="blog-detail-btm">
									<a class="btn blue sm" href="#">Read more<i class="fa fa-angle-right"></i></a>
									<ul class="like-nd-comment">
										<li><i class="fa fa-heart-o"></i>5</li>
										<li><i class="fa fa-commenting-o"></i>2</li>
									</ul>
								</div>
								<a class="circle-btn" href="#"><i class="fa fa-graduation-cap"></i></a>
							</div>
						</div>
					</div>
					<!-- Blog Column -->

					<!-- Blog Column -->
					<div class="item">
						<div class="blog-column z-depth-2">
							<img src="images/blog/img-01.jpg" alt="">
							<div class="blog-detail">
								<ul class="meta-post">
									<li><i class="fa fa-calendar"></i>December 4, 2016</li>
									<li><i class="fa fa-user"></i>Aaron Dzoan</li>
								</ul>
								<h3>Totam rem aperiam eaque ipsa.</h3>
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
								<div class="blog-detail-btm">
									<a class="btn blue sm" href="#">Read more<i class="fa fa-angle-right"></i></a>
									<ul class="like-nd-comment">
										<li><i class="fa fa-heart-o"></i>5</li>
										<li><i class="fa fa-commenting-o"></i>2</li>
									</ul>
								</div>
								<a class="circle-btn music" href="#"><i class="fa fa-music"></i></a>
							</div>
						</div>
					</div>
					<!-- Blog Column -->

				</div>
				<!-- Blog -->

			</div>
		</section>
		<!-- From The Blog -->

		<!-- Client Logo -->
		<section class="client-logo tc-padding">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>Alumnos Destacados</h2>
						<p>.</p>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- Logos Slider -->
				<ul class="client-logo-slider">
					<li><a href="#"><img src="images/commenter/img-01.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/commenter/img-02.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/commenter/img-03.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/commenter/img-04.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/commenter/img-05.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/commenter/img-06.jpg" alt=""></a></li>
				</ul>
				<!-- Logos Slider -->

			</div>
		</section>
		<!-- Client Logo -->

	</main>
	<!-- Main Content -->

@stop


