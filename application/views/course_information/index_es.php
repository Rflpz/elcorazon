<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>El Corazon Golf Club</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Alberto Mendoza" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
		<!--Google fonts-->
		<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
		<!--Icon-->
		<link rel="icon" href="img/corazon_golf_club_icon.png" type="image/png">
		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- SWIPER SLIDER -->
		<link href="assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:

		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background

		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click

		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">

				<div class="row">

					<div class="col-md-6">
						<h6><i class="fa fa-question"></i> PORQUE EL CORAZON?</h6>
						<p align="justify">La palabra lo dice todo. Y con eso se ha dicho, no es demasiado para ella, sino para admirar la magnificencia de lo que está en el espíritu de El Corazon Golf Club. <br>
						La conjunción de los elementos que forman un jugador día a día están contenidos en estos campos verdes. Los campos de gloria y desafíos. Los campos que forman el jugador. Los campos que están destinados a hacer un jugador completo, en el corazón, el espíritu, la fuerza y habilidad. </p>
					</div>

					<div class="col-md-6">
						<h6><i class="icon-envelope"></i> DATOS DE CONTACTO</h6>
						<ul class="list-unstyled">
							<li><i class="fa fa-map-marker"></i><b>Dirección:</b> Domicilio Conocido El Naranjo, El Naranjo Manzanilo</li>
							<li><i class="fa fa-phone"></i><b>Teléfono:</b> 314-133-7940</li>
							<li><i class="fa fa-envelope-o"></i><b>Correo Electrónico: <a href="mailto:reservaciones@elcorazongolfclub.com"> reservaciones@elcorazongolfclub.com</a></b></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">

						<li class="hidden-xs"><a href="../login/index.html">INICIAR SESIÓN</a></li>
						<li class="hidden-xs"><a href="../register/index.html">CREAR CUENTA</a></li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="../../en/course_information/index.html"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/fr.png" width="16" height="11" alt="lang" /> FRENCH</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->


			<!--
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom

				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky clearfix shadow-after-3">
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">
						</ul>
						<!-- /BUTTONS -->
						<!-- Logo -->
						<a class="logo pull-left" href="../index.html">
							<img src="img/corazon_golf_club_heading.png" alt="" />
						</a>


						<!--
							Top Nav

							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE

									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example:

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown"><!-- HOME -->
										<a href="../index.html">
											<em>
												Inicio
											</em>
										</a>
									</li>
									<li class="dropdown"><!-- HISTORY -->
										<a  href="../history/index.html">
											<em>
												Historia
											</em>
										</a>
									</li>
									<li class="dropdown active"><!-- GOLF COURSE -->
										<a class="dropdown-toggle" href="#">
											<em>
												Campo de Golf
											</em>
										</a>
										<ul class="dropdown-menu">
											<li >
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="fa fa-question"></i>
													<em>
														Información del campo
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="fa fa-pencil-square-o"></i>
													<em>
														Scorecard
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="../tee_time/index.html">
													<i style="font-size:15px" class="fa fa-calendar"></i> <em>
														Reservar un Tee Time
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="../rules/index.html">
													<i style="font-size:15px" class="fa fa-warning"></i>
													<em>
														Reglas
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="fa fa-home"></i>
													<em>
														Casa Club
													</em>
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown active"><!-- GOLF COURSE -->
										<a class="dropdown-toggle" href="#">
											<em>
												Restaurante
											</em>
										</a>
										<ul class="dropdown-menu">
											<li >
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="fa fa-cutlery"></i> Restaurante
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="et-wine"></i>
													<em>
														Bar
													</em>
												</a>
											</li>
										</ul>
									</li>
									<li ><!-- EVENTS -->
										<a href="#">
											<em>
												Eventos
											</em>
										</a>
									</li>
									<li><!-- GALLERY -->
										<a href="../gallery/index.html">
											<em>
												Galería
											</em>
										</a>
									</li>
									<li><!-- CONTACT -->
										<a href="../contact/index.html">
											<em>
												Contacto
											</em>
										</a>
									</li>
								</ul>
							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>
			<section class="page-header page-header-2xlg parallax parallax-3" style="background-image:url('img/el_corazon_golf_Course_view1.jpg')">
				<div class="text-center">
					<h3 class="font-khausan-script nomargin weight-300"><span style="color:#D3D3D3">Información del Campo</span></h3>
				</div>
				<div class="overlay"><!-- dark overlay [1 to 9 opacity] --></div>
			</section>
			<!-- /PAGE HEADER -->
			<!--Section 1 -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-lg-6 col-md-6 col-sm-6">

							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over nomargin box-shadow-1" data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fade", "progressBar":"true"}'>
								<div>
									<img class="img-responsive" src="img/section1/hole_1_corazon_golf_club.jpg" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/section1/hole_3_corazon_golf_club.jpg" alt="">
								</div>
								<div>
									<img class="img-responsive" src="assets/images/demo/720x400/3-min.jpg" alt="">
								</div>
							</div>
							<!-- /OWL SLIDER -->

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="heading-title heading-border-bottom">
								<h3>Nuestros Greens</h3>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in minima iusto voluptatem aliquam odit odio. Aliquam voluptatibus beatae officiis?</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi voluptates placeat ducimus delectus magnam tempore dolore dolorem quisquam porro modi voluptatum eum saepe dolorum ratione officia sint eos minus.</p>
						</div>

					</div>

				</div>
			</section>
			<!-- / -->
			<!-- PARALLAX -->
			<section class="parallax " style="background-image: url('img/section1/hole_1_sand_trap.jpg');"><br><br><br><br>
				<div class="overlay dark-3 "><!-- dark overlay [1 to 9 opacity] --></div>
			</section>
			<!-- /PARALLAX -->
			<!--Section 2 -->
			<section>
				<div class="container">

					<div class="row">



						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="heading-title heading-border-bottom">
								<h3>Nuestras Trampas de Arena</h3>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in minima iusto voluptatem aliquam odit odio. Aliquam voluptatibus beatae officiis?</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi voluptates placeat ducimus delectus magnam tempore dolore dolorem quisquam porro modi voluptatum eum saepe dolorum ratione officia sint eos minus.</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">

							<!-- OWL SLIDER -->
							<div class="owl-carousel buttons-autohide controlls-over nomargin box-shadow-1" data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"fade", "progressBar":"true"}'>
								<div>
									<img class="img-responsive" src="img/section1/hole_1_corazon_golf_club.jpg" alt="">
								</div>
								<div>
									<img class="img-responsive" src="img/section1/hole_3_corazon_golf_club.jpg" alt="">
								</div>
								<div>
									<img class="img-responsive" src="assets/images/demo/720x400/3-min.jpg" alt="">
								</div>
							</div>
							<!-- /OWL SLIDER -->

					</div>

				</div>
			</section>
			<!-- / -->








			<!--Footer-->
						<footer id="footer">
							<div class="container">

								<div class="row">

									<div class="col-md-8">

										<!-- Footer Logo -->
										<img class="footer-logo footer-2" src="img/corazon_golf_club_icon.png" height="50" alt="" />

										<!-- Small Description -->
										<p>Bienvenido a El Corazon Golf Club</p>

										<hr />

										<div class="row">
											<div class="col-md-6 col-sm-6">

												<!-- Newsletter Form -->
												<p class="margin-bottom-10">Mandanos un <strong>Email</strong></p><i class="fa fa-envelope"></i>
												<a href="mailto:elcorazongolfclub@gmail.com">reservaciones@elcorazongolfclub.com</a>
												<!-- /Newsletter Form -->
											</div>

											<div class="col-md-6 col-sm-6 hidden-xs">

												<!-- Social Icons -->
												<div class="margin-left-50 clearfix">

													<p class="margin-bottom-10">Siguenos</p>
													<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
														<i class="icon-facebook"></i>
														<i class="icon-facebook"></i>
													</a>

													<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
														<i class="icon-twitter"></i>
														<i class="icon-twitter"></i>
													</a>

													<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
														<i class="icon-gplus"></i>
														<i class="icon-gplus"></i>
													</a>
												</div>
												<!-- /Social Icons -->

											</div>

										</div>

									</div>

									<div class="col-md-4">
										<h4 class="letter-spacing-1">Localización</h4>

										<ul class="list-unstyled">
												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3313.031713260883!2d-104.42159949768678!3d19.129847731777236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa1582596746ada7!2sEl+Corazon+Golf+Club!5e1!3m2!1ses-419!2smx!4v1446833813141" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
										</ul>

									</div>

								</div>

							</div>
							<div class="copyright">
								<div class="container">
									<ul class="pull-right nomargin list-inline mobile-block">
										<li><a class="lightbox" href="ajax/dummy-lightbox.html" data-lightbox="iframe" data-plugin-options="{&quot;type&quot;:&quot;ajax&quot;, &quot;closeOnBgClick&quot;:false}">Privacy</a></li>
									</ul>
									Bienvenido a El Corazon Golf Club &copy; 2015. Reservados todos los derechos
								</div>
							</div>
						</footer>
						<!-- /FOOTER -->
		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		<!-- SWIPER SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.swiper_slider.js"></script>
	</body>
</html>
