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
		<link rel="stylesheet" href="assets/css/custom.css" type="text/css">
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
						<h6><i class="fa fa-question"></i> WHY EL CORAZON?</h6>
						<p align="justify">The word says it all. And with that been said, there is not too much to it, but to admire the magnificence of what is in spirit El Corazon Golf Club. <br>
						The conjunction of elements that form a player day by day are contained in this green fields. Fields of glory and challenges. Fields that form the player. Fields that are meant to make a complete player, in heart, spirit, strength and skill. </p>
					</div>

					<div class="col-md-6">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><i class="fa fa-map-marker"></i><b>Address:</b> Domicilio Conocido El Naranjo, El Naranjo Manzanilo</li>
							<li><i class="fa fa-phone"></i><b>Phone:</b> 314-133-7940</li>
							<li><i class="fa fa-envelope-o"></i><b>Email: <a href="mailto:reservaciones@elcorazongolfclub.com"> reservaciones@elcorazongolfclub.com</a></b></li>
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

						<li class="hidden-xs"><a href="login/index.html">LOGIN</a></li>
						<li class="hidden-xs"><a href="register/index.html">REGISTER</a></li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="es/index.html"><img class="flag-lang" src="assets/images/flags/mx.png" width="16" height="11" alt="lang" /> SPANISH</a></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/fr.png" width="16" height="11" alt="lang" /> FANCES</a></li>
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
												Home
											</em>
										</a>
									</li>
									<li class="dropdown"><!-- HISTORY -->
										<a  href="history/index.html">
											<em>
												History
											</em>
										</a>
									</li>
									<li class="dropdown active"><!-- GOLF COURSE -->
										<a class="dropdown-toggle" href="#">
											<em>
												Golf Course
											</em>
										</a>
										<ul class="dropdown-menu">
											<li >
												<a style="font-size:20px" href="course_information/index.html">
													<i style="font-size:15px" class="fa fa-question"></i>
													<em>
														Course Information
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
														Book a Tee Time
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="rules/index.html">
													<i style="font-size:15px" class="fa fa-warning"></i>
													<em>
														Rules
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="fa fa-home"></i>
													<em>
														Club House
													</em>
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown active"><!-- GOLF COURSE -->
										<a class="dropdown-toggle" href="#">
											<em>
												Restaurant
											</em>
										</a>
										<ul class="dropdown-menu">
											<li >
												<a style="font-size:20px" href="#">
													<i style="font-size:15px" class="fa fa-cutlery"></i> Restaurant
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
												Events
											</em>
										</a>
									</li>
									<li><!-- GALLERY -->
										<a href="gallery/index.html">
											<em>
												Gallery
											</em>
										</a>
									</li>
									<li><!-- CONTACT -->
										<a href="contact/index.html">
											<em>
												Contact
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
						<div class="swiper-slide" style="background-image: url('img/banner/casa_club_corazon_golf_club_side_view.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</div>
						<!-- /SLIDE 1 -->


						<!-- SLIDE 2 -->
						<div class="swiper-slide" style="background-image: url('img/banner/club_house_corazon_golf_club_restaurant_view_bar_view.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</div>
						<!-- /SLIDE 2 -->

						<!-- SLIDE 3 -->
						<div class="swiper-slide" style="background-image: url('img/banner/hole_5_green_corazon_golf_club_lake_view.jpg');">
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</div>
						<!-- /SLIDE 3-->
					</div>
					<!-- SLIDE 4 -->
					<div class="swiper-slide" style="background-image: url('img/banner/hole_17_green_ocean_view_corazon_golf_club_green_view.jpg');">
						<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
					</div>
					<!-- /SLIDE 4 -->




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
					<h1 class="font-khausan-script size-50 weight-300 nomargin-bottom">Welcome! to <span style="color: #FF0000">El Corazon Golf Club</span>.</h1>
					<hr />
					<h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-400 size-25">Exclusive</h2><br><br>
					<p>The word says it all. And with that been said, there is not too much to it, but to admire the magnificence of what is in spirit El Corazon Golf Club. <br>
					The conjunction of elements that form a player day by day are contained in this green fields. Fields of glory and challenges. Fields that form the player. Fields that are meant to make a complete player, in heart, spirit, strength and skill. </p>
				</div>
		</div>
		<!-- Parallax -->
		<section class="parallax parallax-1" style="background-image: url('img/banner/bannerfinal.jpg');">
			<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

			<div class="container">

				<div class="text-center">
					<p class="font-lato weight-300 lead nomargin-top">Take a look at our amazing golf course. </p>
					<a class="btn btn-default btn-lg" href="gallery/index.html">Go to our Gallery</a>
				</div>

			</div>
		</section>
		<!-- /Parallax -->
		<!-- Healthy -->
		<section class="alternate">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 text-center-xs">

						<h2 class="font-khausan-script size-50 weight-300 nomargin-bottom "><span>Restaurant</span></h2>
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
					<h3 class="font-khausan-script nomargin weight-300"><span>Our Menu</span></h3>
					<p class="font-lato weight-300 lead nomargin-top">YOU'LL LOVE IT. VARIOUS FOODS.</p>
					<a class="btn btn-default btn-lg" href="#">Take a look at our menu</a>
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
								<h3>Learn about our History</h3>
							</div>

							<p>Welcome to El Corazon Golf Club &amp; Restaurant. once you fly over Manzanillo, you see a beautiful view of its twin bays, Manzanillo and Santiago bays. They are seperated by the famous Penninsula de Santiago, home of La Punta. One of the most prestigous places to live in Mexico......</p>

							<a href="history/index.html" class="black">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Rules of Access</h3>
							</div>
							<p>El acceso al campo de GOLF y RESTAURANT requiere siempre el VESTIR DE MANERA APROPIADA; queda prohibido el uso de camisetas, playeras si manga, vestimenta rota, o mezclilla, sólo se permite camisa de vestir o playera tipo polo.Queda estrictamente prohibido introducir bebidas.......</p>

							<a href="rules/index.html" class="black">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Book a Tee Time</h3>
							</div>
							<p>Booking a Tee Time is a simple new easy way to get a reservation at our <strong>Exclusive</strong> golf course. Pick a time and date and your all set. Exclusive for member only </p> <br><br><br>

							<a href="tee_time/index.html" class="black">
								Book
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>now</span>
										<span>for tomorrow</span>
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
							<p>Welcome to El Corazon Golf Club</p>

							<hr />

							<div class="row">
								<div class="col-md-6 col-sm-6">

									<!-- Newsletter Form -->
									<p class="margin-bottom-10">Send us an <strong>Email</strong></p><i class="fa fa-envelope"></i>
									<a href="mailto:elcorazongolfclub@gmail.com">reservaciones@elcorazongolfclub.com</a>
									<!-- /Newsletter Form -->
								</div>

								<div class="col-md-6 col-sm-6 hidden-xs">

									<!-- Social Icons -->
									<div class="margin-left-50 clearfix">

										<p class="margin-bottom-10">Follow Us</p>
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
							<h4 class="letter-spacing-1">Location</h4>

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
						Welcome to El Corazon Golf Club &copy; 2015. All Rights Reserved
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
