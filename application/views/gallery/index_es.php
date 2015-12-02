<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->


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

						<li class="hidden-xs"><a href="../login/index.html">LOGIN</a></li>
						<li class="hidden-xs"><a href="../register/index.html">REGISTER</a></li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="<?php echo base_url()?>assets/images/flags/mx.png" width="16" height="11" alt="lang" />ESPAÑOL</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="<?php echo base_url().'index.php/gallery'; ?>"><img class="flag-lang" src="<?php echo base_url()?>assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="<?php echo base_url()?>assets/images/flags/fr.png" width="16" height="11" alt="lang" /> FRENCH</a></li>
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
							<img src="<?php echo base_url()?>img/corazon_golf_club_heading.png" alt="" />
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
												<a style="font-size:20px" href="../course_information/index.html">
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
										<a href="#">
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




			<section class="page-header dark ">
				<div class="container">

					<h1>GALLERY</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="../index.html">Inicio</a></li>
						<li class="active">Gallery</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<ul id="portfolio_filter" class="nav nav-pills margin-bottom-60">
						<li class="filter active"><a data-filter="*" href="#">All</a></li>
						<li class="filter"><a data-filter=".front" href="#">Front Nine</a></li>
						<li class="filter"><a data-filter=".back" href="#">Back Nine</a></li>
						<li class="filter"><a data-filter=".greens" href="#">Greens</a></li>
					</ul>

					<!--
						Please note: .infinite-scroll class

						data-nextSelector="#inf-load-next" - see the bottom of portfolio
						data-itemSelector="portfolio-item" - item class - should be common on all pages.

					-->
					<div id="portfolio" class="clearfix infinite-scroll portfolio-isotope portfolio-isotope-4" data-nextSelector="#inf-load-next" data-itemSelector=".portfolio-item">

						<div class="portfolio-item development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?php echo base_url()?>img/hole_3_tee_box_ladies.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-eye size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="fa fa-list-alt size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="img/hole_3_tee_box_ladies.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Street Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->



					</div>

				</div>
			</section>
			<!-- / -->


			<!-- INFINITE SCROLL LOAD -->
			<div id="inf-load-next" class="center">

				<!--
					NEXT PAGES:
						portfolio-loading-infinite-scroll-2.html
						portfolio-loading-infinite-scroll-3.html
						portfolio-loading-infinite-scroll-4.html
						......
				-->
				<a href="portfolio-loading-infinite-scroll-2.html" class="btn btn-3d btn-xlg btn-dirtygreen block size-25 weight-300 font-lato nomargin noradius">
					load more...
				</a>

			</div>
			<!-- /INFINITE SCROLL LOAD -->



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
		<script type="text/javascript">var plugin_path = '<?php echo base_url()?>assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url()?>assets/js/scripts.js"></script>
		<!-- SWIPER SLIDER -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/view/demo.swiper_slider.js"></script>
	</body>
</html>
