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
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<link rel="stylesheet" href="assetsnew/base.min.css"/>
		<link rel="stylesheet" href="assetsnew/fancy.min.css"/>
		<link rel="stylesheet" href="assetsnew/main.css"/>
		<script src="assetsnew/compatibility.min.js"></script>
		<script src="assetsnew/theViewer.min.js"></script>
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
								<li><a tabindex="-1" href="../../en/rules/index.html"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/mx.png" width="16" height="11" alt="lang" /> SPANISH</a></li>
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
												<a style="font-size:20px" href="../course_information/index.html">
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
												<a style="font-size:20px" href="../tee_time/index.html">
													<i style="font-size:15px" class="fa fa-calendar"></i> <em>
														Reservar Tee Time
													</em>
												</a>
											</li>
											<li>
												<a style="font-size:20px" href="#">
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




      <!--
				PAGE HEADER

				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header">
				<div class="container">

					<h1>Reglas de Acceso</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="../index.html">Inicio</a></li>
						<li class="active">Reglas de Acceso</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<div class="container">

				<div class="text-center margin-top-80 margin-bottom-100 clearfix">
          <h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-400 size-25">Reglas de Acceso</h2><br><br>
					<hr />
      <center>

				<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="assetsnew/bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0"> </div><div class="t m0 x2 h3 y2 ff2 fs1 fc1 sc1 ls0 ws0">REGLAS DE ACCESO </div><div class="t m0 x1 h4 y3 ff3 fs1 fc0 sc0 ls0 ws0">El acceso al campo de GOLF y RESTAU<span class="_ _0"></span>RANT requiere si<span class="_ _0"></span>empre el </div><div class="t m0 x1 h4 y4 ff3 fs1 fc2 sc0 ls0 ws0">VESTIR<span class="fc0"> <span class="_ _1"> </span></span>DE <span class="_ _1"> </span>MANERA <span class="_ _1"> </span>APROPIADA<span class="fc0">; <span class="_ _1"> </span>queda <span class="_ _1"> </span>prohibido <span class="_ _1"> </span>el <span class="_ _1"> </span>uso <span class="_ _1"> </span>de </span></div><div class="t m0 x1 h4 y5 ff3 fs1 fc0 sc0 ls0 ws0">camisetas, <span class="_ _2"> </span>playeras <span class="_ _3"> </span>si <span class="_ _3"> </span>man<span class="_ _0"></span>ga, <span class="_ _3"> </span>v<span class="_ _0"></span>estimenta <span class="_ _3"> </span>rota, <span class="_ _2"> </span>o <span class="_ _2"> </span>mezclilla, <span class="_ _2"> </span>sólo<span class="_ _4"></span> </div><div class="t m0 x1 h4 y6 ff3 fs1 fc0 sc0 ls0 ws0">se permite camisa de vestir o playera tipo polo. </div><div class="t m0 x1 h4 y7 ff3 fs1 fc0 sc0 ls0 ws0">Queda <span class="_ _3"> </span>estrict<span class="_ _0"></span>amente <span class="_ _2"> </span><span class="fc2">prohibido <span class="_ _3"> </span>introducir <span class="_ _2"> </span>bebidas, <span class="_ _2"> </span>alimentos <span class="_ _3"> </span>y </span></div><div class="t m0 x1 h4 y8 ff3 fs1 fc2 sc0 ls0 ws0">mascotas<span class="fc0">, a cualquiera de nuestras instalaciones. </span></div><div class="t m0 x1 h4 y9 ff3 fs1 fc0 sc0 ls0 ws0">Sólo <span class="_ _5"> </span>hay <span class="_ _5"> </span><span class="fc2">Green <span class="_ _5"> </span>Fees <span class="_ _5"> </span>por <span class="_ _5"> </span>18 <span class="_ _5"> </span>Hoyos</span>, <span class="_ _5"> </span>sin <span class="_ _5"> </span>excepción <span class="_ _5"> </span>alguna, <span class="_ _5"> </span>los </div><div class="t m0 x1 h4 ya ff3 fs1 fc0 sc0 ls0 ws0">precios están<span class="_ _0"></span> publi<span class="_ _0"></span>cados <span class="_ _0"></span>dentro <span class="_ _0"></span>de la <span class="_ _0"></span>tienda,<span class="_ _0"></span> <span class="_ _0"></span><span class="fc2">No <span class="_ _0"></span>Hay <span class="_ _0"></span>Descuentos </span></div><div class="t m0 x1 h4 yb ff3 fs1 fc2 sc0 ls0 ws0">de Ningún Tipo<span class="fc0">. Evítenos la pena de negar cualquier preferencia. </span></div><div class="t m0 x1 h4 yc ff3 fs1 fc0 sc0 ls0 ws0">Iniciar <span class="_ _6"></span>de <span class="_ _6"></span>cua<span class="_ _4"></span>lquier <span class="_ _6"></span>hoyo <span class="_ _7"></span>que <span class="_ _7"></span>no <span class="_ _7"></span>sea <span class="_ _6"></span>el <span class="_ _6"></span><span class="ls1">#1<span class="_ _0"></span></span>, <span class="_ _7"></span>debe <span class="_ _6"></span>ser <span class="_ _7"></span>autorizado </div><div class="t m0 x1 h4 yd ff3 fs1 fc0 sc0 ls0 ws0">por la administración, por ello su puntualidad es muy importante. </div><div class="t m0 x1 h4 ye ff3 fs1 fc0 sc0 ls0 ws0">Los <span class="_ _8"></span>Tee <span class="_ _8"></span>Times <span class="_ _0"></span>serán<span class="_ _0"></span> <span class="_ _8"></span>cada <span class="_ _8"></span>15 <span class="_ _0"></span>min<span class="_ _0"></span>utos <span class="_ _8"></span>como <span class="_ _8"></span>mínimo, <span class="_ _8"></span><span class="fc2">Empezando <span class="_ _8"></span>a </span></div><div class="t m0 x1 h4 yf ff3 fs1 fc2 sc0 ls0 ws0">las 8:00 horas y siendo la última salida a las 15:00<span class="ff4"> </span>hrs.<span class="fc0"> </span></div><div class="t m0 x1 h4 y10 ff3 fs1 fc2 sc0 ls0 ws0">El <span class="_ _1"> </span>Servicio <span class="_ _2"> </span>del <span class="_ _2"> </span>restauran<span class="_ _0"></span>t <span class="_ _1"> </span><span class="fc0"> <span class="_ _2"> </span>es <span class="_ _2"> </span>de <span class="_ _1"> </span></span><span class="ls2">8:</span>00 <span class="_ _2"> </span>a <span class="_ _1"> </span>15:00 <span class="_ _2"> </span>Hrs, <span class="_ _1"> </span>y <span class="_ _2"> </span>del <span class="_ _2"> </span>B<span class="_ _0"></span>ar </div><div class="t m0 x1 h4 y11 ff3 fs1 fc2 sc0 ls0 ws0">hasta las 20:30 Hrs<span class="fc0">. </span></div><div class="t m0 x1 h4 y12 ff3 fs1 fc3 sc0 ls0 ws0">En <span class="_ _9"> </span>Domingo <span class="_ _9"> </span><span class="fc0">el <span class="_ _9"> </span>servicio <span class="_ _a"> </span>de <span class="_ _9"> </span></span>Bar <span class="_ _a"> </span>y <span class="_ _9"> </span>de <span class="_ _9"> </span>Restaurant <span class="_ _9"> </span><span class="fc0">es <span class="_ _a"> </span>de <span class="_ _9"> </span>8:00 <span class="_ _a"> </span>a </span></div><div class="t m0 x1 h4 y13 ff3 fs1 fc0 sc0 ls0 ws0">15:00 horas y los Tee Times de 8:00 a 11:00 hrs.<span class="_ _0"></span> </div><div class="t m0 x1 h4 y14 ff3 fs1 fc0 sc0 ls0 ws0"> </div><div class="t m0 x1 h4 y15 ff3 fs1 fc2 sc0 ls0 ws0">Se <span class="_ _b"></span>Requiere <span class="_ _b"></span>llamar <span class="_ _b"> </span>con<span class="_ _0"></span> <span class="_ _b"> </span>an<span class="_ _0"></span>terioridad<span class="fc0 ls3">, <span class="_ _b"></span><span class="ls0">mínimo <span class="_ _b"></span><span class="ls2">24</span>:00 <span class="_ _b"></span>horas <span class="_ _b"></span>antes </span></span></div><div class="t m0 x3 h4 y16 ff3 fs1 fc0 sc0 ls0 ws0">para <span class="_ _b"></span>la <span class="_ _b"></span>reservación <span class="_ _6"></span>de <span class="_ _b"></span>su <span class="_ _b"></span>salida <span class="_ _b"></span>al <span class="_ _b"></span>juego; <span class="_ _b"></span><span class="fc2 ls4">La<span class="ff4 ls0"> <span class="_ _b"></span><span class="ff3">puntualidad <span class="_ _6"></span>es <span class="_ _b"></span>muy </span></span></span></div><div class="t m0 x3 h4 y17 ff3 fs1 fc2 sc0 ls0 ws0">importante<span class="fc0">, <span class="_ _7"></span>y <span class="_ _7"></span>los <span class="_ _7"></span>Tee <span class="_ _7"></span>Times, <span class="_ _7"></span>serán <span class="_ _7"></span>respetados <span class="_ _7"></span>únicamente <span class="_ _7"></span>hasta </span></div><div class="t m0 x3 h4 y18 ff3 fs1 fc0 sc0 ls0 ws0">la hora previamente reservada. </div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
				<div id="pf2" class="pf w0 h0" data-page-no="2"><div class="pc pc2 w0 h0"><img class="bi x0 y0 w1 h5" alt="" src="assetsnew/bg2.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0"> </div><div class="t m0 x1 h4 y19 ff3 fs1 fc0 sc0 ls0 ws0">Las <span class="_ _7"></span>Reservaciones <span class="_ _c"></span>para <span class="_ _c"></span>el <span class="_ _7"></span>restaurant <span class="_ _7"></span>también <span class="_ _c"></span>son <span class="_ _7"></span>requeridas, <span class="_ _c"></span>si </div><div class="t m0 x1 h4 y1a ff3 fs1 fc0 sc0 ls0 ws0">Usted <span class="_ _8"></span>gust<span class="_ _0"></span>a <span class="_ _8"></span>pasar <span class="_ _c"></span>al <span class="_ _8"></span>restaurant, <span class="_ _c"></span>por <span class="_ _8"></span>favor <span class="_ _c"></span>menciónelo <span class="_ _c"></span><span class="ls5">a <span class="_ _8"></span></span>nuestro </div><div class="t m0 x1 h4 y1b ff3 fs1 fc0 sc0 ls0 ws0">staff o cuando reserve para su Tee Time. </div><div class="t m0 x1 h4 y1c ff3 fs1 fc2 sc0 ls0 ws0">Los <span class="_ _0"></span>Miembros <span class="_ _8"></span>que <span class="_ _0"></span>traigan<span class="_ _0"></span> <span class="_ _0"></span>invitados<span class="_ _0"></span><span class="fc0">, <span class="_ _8"></span>serán <span class="_ _0"></span>responsables <span class="_ _0"></span>por <span class="_ _8"></span>ellos </span></div><div class="t m0 x1 h4 y1d ff3 fs1 fc0 sc0 ls0 ws0">en <span class="_ _d"> </span>todo <span class="_ _d"> </span>momento <span class="_ _d"> </span>y<span class="_ _4"></span> <span class="_ _d"> </span>sus <span class="_ _d"> </span>invitados <span class="_ _d"> </span>deberán <span class="_ _d"> </span>realizar<span class="_ _4"></span> <span class="_ _d"> </span>el <span class="_ _d"> </span>pago<span class="_ _4"></span> </div><div class="t m0 x1 h4 y1e ff3 fs1 fc0 sc0 ls0 ws0">correspondiente por Green fee o renta de carro. </div><div class="t m0 x1 h4 y1f ff3 fs1 fc3 sc0 ls0 ws0">El <span class="_ _6"></span>tiro <span class="_ _b"></span>de <span class="_ _7"></span>práctica <span class="_ _b"></span><span class="fc4">tiene <span class="_ _6"></span>un <span class="_ _7"></span>costo <span class="_ _b"></span>de <span class="_ _6"></span>$ <span class="_ _6"></span>50.00<span class="_ _0"></span> <span class="_ _6"></span>pesos <span class="_ _6"></span>por <span class="_ _6"></span>cubeta </span></div><div class="t m0 x1 h4 y20 ff3 fs1 fc4 sc0 ls0 ws0">de <span class="_ _7"></span>20 <span class="_ _7"></span>pelotas, <span class="_ _7"></span>no <span class="_ _7"></span>está <span class="_ _7"></span>incluido <span class="_ _7"></span>en <span class="_ _7"></span>el <span class="_ _7"></span>Gree <span class="_ _c"></span>Fee <span class="_ _7"></span>y <span class="_ _7"></span>no <span class="_ _7"></span>es <span class="_ _7"></span>para <span class="_ _7"></span>más </div><div class="t m0 x1 h4 y21 ff3 fs1 fc4 sc0 ls0 ws0">de 150 yardas.<span class="fc0"> </span></div><div class="t m0 x1 h4 y22 ff3 fs1 fc3 sc0 ls0 ws0">Los <span class="_ _d"> </span>Grupos <span class="_ _d"> </span>serán <span class="_ _e"> </span><span class="fc0">de <span class="_ _d"> </span>un <span class="_ _d"> </span>máximo <span class="_ _e"> </span></span>de <span class="_ _d"> </span>4 <span class="_ _d"> </span>jugadores<span class="fc0">, <span class="_ _d"> </span>cualquier </span></div><div class="t m0 x1 h4 y23 ff3 fs1 fc0 sc0 ls0 ws0">excepción <span class="_ _7"></span>a <span class="_ _7"></span>esta <span class="_ _7"></span>regla <span class="_ _7"></span>debe <span class="_ _7"></span>ser <span class="_ _7"></span>autorizada <span class="_ _7"></span>directamente <span class="_ _7"></span>por <span class="_ _7"></span>la<span class="_ _4"></span> </div><div class="t m0 x1 h4 y24 ff3 fs1 fc0 sc0 ls0 ws0">administración,  se  deben <span class="_ _f"> </span>respetar  a  los  demás  jugadores  sin </div><div class="t m0 x1 h4 y25 ff3 fs1 fc0 sc0 ls0 ws0">interrumpir el ritmo del juego. </div><div class="t m0 x1 h4 y26 ff3 fs1 fc0 sc0 ls0 ws0">Estas <span class="_ _d"> </span>regl<span class="_ _4"></span>as <span class="_ _10"> </span>no <span class="_ _d"> </span>eliminan <span class="_ _10"> </span>sino <span class="_ _10"> </span>modifican <span class="_ _10"> </span>y <span class="_ _10"> </span>amplían <span class="_ _d"> </span>a <span class="_ _10"> </span>las <span class="_ _10"> </span>ya </div><div class="t m0 x1 h4 y27 ff3 fs1 fc0 sc0 ls0 ws0">aplicadas. </div><div class="t m0 x1 h4 y28 ff3 fs1 fc0 sc0 ls0 ws0">La <span class="_ _11"> </span>Empresa <span class="_ _11"> </span>no <span class="_ _11"> </span>se <span class="_ _11"> </span>hace <span class="_ _11"> </span>responsable <span class="_ _11"> </span>por <span class="_ _12"> </span>daños <span class="_ _11"> </span>o <span class="_ _12"> </span>lesio<span class="_ _0"></span>nes </div><div class="t m0 x1 h4 y29 ff3 fs1 fc0 sc0 ls0 ws0">provocadas por quien se encuentre dentro de la propiedad.   <span class="ls6">                       <span class="_ _4"></span><span class="ls0"> </span></span></div><div class="t m0 x1 h4 y2a ff3 fs1 fc0 sc0 ls6 ws0">              <span class="_ _4"></span>        <span class="_ _4"></span>       <span class="ls0">             <span class="ff4 fc2">El Corazón Golf Club, </span> </span></div><div class="t m0 x4 h6 y2b ff4 fs1 fc2 sc0 ls7 ws0">                  <span class="ls0">No es un Campo de Golf Público. </span></div><div class="t m0 x5 h4 y2c ff4 fs1 fc2 sc0 ls0 ws0">Nos Reservamos El Derecho de Admisión<span class="ff3 fc0"> </span></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>

            </center>
          </div>
				</div>
		</div>
		<div class="container">

		</div>
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
