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
		<!--Custom CSS-->
		<link rel="stylesheet" href="en/assets/css/custom.css" type="text/css">
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

						<li class="hidden-xs"><a href="login/index.html">INICIAR SESIÓN</a></li>
						<li class="hidden-xs"><a href="register/index.html">CREAR CUENTA</a></li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="../index.html"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
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
						<a class="logo pull-left" href="#">
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
										<a href="#">
											<em>
												Inicio
											</em>
										</a>
									</li>
									<li class="dropdown"><!-- HISTORY -->
										<a  href="history/index.html">
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
												<a style="font-size:20px" href="course_information">
													<i style="font-size:15px" class="fa fa-question"></i>
													<em>
														Información del Campo
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
												<a style="font-size:20px" href="tee_time/index.html">
													<i style="font-size:15px" class="fa fa-calendar"></i> <em>
														Reservar un Tee Time
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="rules/index.html">
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
										<a href="gallery/index.html">
											<em>
												Galería
											</em>
										</a>
									</li>
									<li><!-- CONTACT -->
										<a href="contact/index.html">
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




			<!--
				SLIDER

				Classes:
					.fullheight = full height slider
			-->
			<section id="slider" class="fullheight">

				<!--
					SWIPPER SLIDER PARAMS

					data-effect="slide|fade|coverflow"
					data-autoplay="4000|false"
				-->
				<div class="swiper-container" data-effect="slide" data-autoplay="4000">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('img/banner/casa_club_Corazon_golf_club_2.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</div>
						<!-- /SLIDE 1 -->


						<!-- SLIDE 2 -->
						<div class="swiper-slide" style="background-image: url('img/banner/golf_shot_el_corazon_manzanillo.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</div>
						<!-- /SLIDE 2 -->

						<!-- SLIDE 3 -->
						<div class="swiper-slide" style="background-image: url('img/banner/corazon_hole_18_banner.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</div>
						<!-- /SLIDE 3-->
					</div>

					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
				</div>

			</section>
			<!-- /SLIDER -->




			<div class="container">

				<div class="text-center margin-top-80 margin-bottom-100 clearfix">
					<h1 class="font-khausan-script size-50 weight-300 nomargin-bottom">¡Bienvenido! a <span style="color: #FF0000">El Corazon Golf Club</span>.</h1>
					<hr />
					<h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-400 size-25">Exclusivo</h2><br><br>
					<p>La palabra lo dice todo. Y con eso se ha dicho, no es demasiado para ella, sino para admirar la magnificencia de lo que está en el espíritu de El Corazon Golf Club. <br>
					La conjunción de los elementos que forman un jugador día a día están contenidos en estos campos verdes. Los campos de gloria y desafíos. Los campos que forman el jugador. Los campos que están destinados a hacer un jugador completo, en el corazón, el espíritu, la fuerza y habilidad. </p>
				</div>
		</div>
		<!-- Parallax -->
		<section class="parallax parallax-1" style="background-image: url('img/banner/bannerfinal.jpg');">
			<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

			<div class="container">

				<div class="text-center">
					<p class="font-lato weight-300 lead nomargin-top">Echa un vistazo a nuestro campo de golf increíble. </p>
					<a class="btn btn-default btn-lg" href="gallery/index.html">Ir a la Galería</a>
				</div>

			</div>
		</section>
		<!-- /Parallax -->
		<!-- Healthy -->
		<section class="alternate">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 text-center-xs">

						<h2 class="font-khausan-script size-50 weight-300 nomargin-bottom "><span>Restaurante</span></h2>
							<p>El servicio del restaurante es de 8:00 a 15:00 Hrs. y del Bar hasta las 20:30 Hrs. En Domingo el servicio de Bar y Restaurant es de 8:00 a 15:00 horas.</p>



					</div>

					<div class="col-sm-6">

						<div class="row lightbox" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>



						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- /Healthy -->


		<!-- Parallax -->
		<section class="parallax parallax-1" style="background-image: url('assets/images/demo/thematics/restaurant/slider_3-min.jpg');">
			<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

			<div class="container">

				<div class="text-center">
					<h3 class="font-khausan-script nomargin weight-300"><span>Nuestro Menú</span></h3>
					<p class="font-lato weight-300 lead nomargin-top">TE ENCANTARÁ.</p>
					<a class="btn btn-default btn-lg" href="#">Ver el menú</a>
				</div>

			</div>
		</section>
		<!-- /Parallax -->
			<!--Information -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-md-4">

							<div class="heading-title heading-border-bottom heading-color">
								<h3>Conoce nuestra historia </h3>
							</div>

							<p>Bienvenido a El Corazon Golf Club &amp; Restaurante. una vez que vuela sobre Manzanillo, se ve una hermosa vista de sus bahías gemelas, Manzanillo y Santiago bahías. Están separados por la famosa Península de Santiago, sede de La Punta. Uno de los lugares más prestigiosos para vivir en México......</p>

							<a href="history/index.html" class="black">
								Leer
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>mas</span>
										<span>ahora</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Reglas de Acceso</h3>
							</div>
							<p>El acceso al campo de GOLF y RESTAURANT requiere siempre el VESTIR DE MANERA APROPIADA; queda prohibido el uso de camisetas, playeras si manga, vestimenta rota, o mezclilla, sólo se permite camisa de vestir o playera tipo polo.Queda estrictamente prohibido introducir bebidas.......</p>

							<a href="rules/index.html" class="black">
								Leer
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>mas</span>
										<span>ahora</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Reservar un Tee Time</h3>
							</div>
							<p>La reserva de un Tee Time es una nueva manera simple y fácil de conseguir una reserva en nuestra <strong>Exclusivo</strong> campo de golf. Escoja una fecha y hora, y ya está todo listo. Exclusivo para miembros solamente</p> <br><br>

							<a href="tee_time/index.html" class="black">
								Reservar
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>ahora</span>
										<span>al rato </span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

					</div>

				</div>
			</section>



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
									<p class="margin-bottom-10">Mandanos un <strong>Correo</strong></p><i class="fa fa-envelope"></i>
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
