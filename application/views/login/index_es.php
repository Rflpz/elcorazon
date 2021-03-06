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

						<li class="hidden-xs"><a href="#">INICIAR SESIÓN</a></li>
						<li class="hidden-xs"><a href="../register/index.html">CREAR CUENTA</a></li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="../../en/login/index.html"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
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

					<h1>Iniciar Sesión</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="../index.html">Inicio</a></li>
						<li class="active">Iniciar Sesión</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!--Login-->
			<section>
				<div class="container">

					<div class="row">
						<div class="col-md-6 col-md-offset-3">

							<div class="toggle toggle-transparent toggle-accordion toggle-noicon">

								<div class="toggle active">
									<label class="size-20"><i class="fa fa-users"></i> &nbsp; Soy un Miembro</label>
									<div class="toggle-content">


										<!-- ALERT -->
										<div class="alert alert-mini alert-danger margin-bottom-30">
										 Incorrecto!
										</div><!-- /ALERT -->


										<form class="sky-form" method="post" action="#" autocomplete="off">
											<div class="clearfix">

												<!-- Email -->
												<div class="form-group">
													<label>Correo/Usuario</label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-envelope"></i>
														<input required="" type="email">
														<b class="tooltip tooltip-bottom-right">Necesitas Verificar tu Cuenta</b>
													</label>
												</div>

												<!-- Password -->
												<div class="form-group">
													<label>Contraseña</label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-lock"></i>
														<input required="" type="password">
														<b class="tooltip tooltip-bottom-right">Escribe contraseña</b>
													</label>
												</div>

											</div>

											<div class="row">

												<div class="col-md-6 col-sm-6 col-xs-6">
												</div>

												<div class="col-md-6 col-sm-6 col-xs-6 text-right">

													<button class="btn btn-primary"><i class="fa fa-check"></i>INICIAR SESIÓN</button>

												</div>

											</div>

										</form>


									</div>
								</div>

								<div class="toggle">
									<label class="size-20"><i class="fa fa-user-plus"></i> &nbsp; Aun no eres Miembro?</label>
									<div class="toggle-content">

										<!-- ALERT -->
										<div class="alert alert-mini alert-danger margin-bottom-30">
											Contraseñas no Coinciden!
										</div><!-- /ALERT -->

										<form class="nomargin sky-form" action="#" method="post" enctype="multipart/form-data">
											<fieldset>

												<div class="row">
													<div class="form-group">

														<div class="col-md-6 col-sm-6">
															<label>Nombre *</label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-user"></i>
																<input required="" type="text">
																<b class="tooltip tooltip-bottom-right">Nombre</b>
															</label>
														</div>

														<div class="col-md-6 col-sm-6">
															<label for="register:last_name">Apellido *</label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-user"></i>
																<input required="" type="text">
																<b class="tooltip tooltip-bottom-right">Tu Apellido</b>
															</label>
														</div>

													</div>
												</div>

												<div class="row">
													<div class="form-group">

														<div class="col-md-6 col-sm-6">
															<label for="register:email">Correo *</label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-envelope"></i>
																<input required="" type="text">
																<b class="tooltip tooltip-bottom-right">Correo</b>
															</label>
														</div>

														<div class="col-md-6 col-sm-6">
															<label for="register:phone">Telefono</label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-phone"></i>
																<input type="text">
																<b class="tooltip tooltip-bottom-right">Telefono (opcional)</b>
															</label>
														</div>

													</div>
												</div>

												<div class="row">
													<div class="form-group">

														<div class="col-md-6 col-sm-6">
															<label for="register:pass1">Contraseña *</label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-lock"></i>
																<input required="" type="password" class="err">
																<b class="tooltip tooltip-bottom-right">Min. 6 caracteres</b>
															</label>
														</div>

														<div class="col-md-6 col-sm-6">
															<label for="register:pass2">Ingresa otraves contraseña *</label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-lock"></i>
																<input required="" type="password" class="err">
																<b class="tooltip tooltip-bottom-right">Ingresa otraves contraseña</b>
															</label>
														</div>

													</div>
												</div>

												<hr />

												<label class="checkbox nomargin"><input class="checked-agree" type="checkbox" name="checkbox"><i></i>Acepto <a href="#" data-toggle="modal" data-target="#termsModal">Terminos de Servicio</a></label>
											</fieldset>

											<div class="row">
												<div class="col-md-12">
													<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Crear Cuenta</button>
												</div>
											</div>

										</form>



									</div>
								</div>

							</div>

						</div>
					</div>

				</div>
			</section>
			<!-- / -->




			<!-- MODAL -->
			<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title" id="myModal">Terms &amp; Conditions</h4>
						</div>

						<div class="modal-body modal-short">
							<h4><b>Introduction</b></h4>
							<p>These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.</p>
							<p>[You must be at least [18] years of age to use this website.  By using this website [and by agreeing to these terms and conditions] you warrant and represent that you are at least [18] years of age.]</p>


							<h4><strong>License to use website</strong></h4>
							<p>Unless otherwise stated, [NAME] and/or its licensors own the intellectual property rights in the website and material on the website.  Subject to the license below, all these intellectual property rights are reserved.</p>
							<p>You may view, download for caching purposes only, and print pages [or [OTHER CONTENT]] from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>
							<p>You must not:</p>
							<ul>
								<li>republish material from this website (including republication on another website);</li>
								<li>sell, rent or sub-license material from the website;</li>
								<li>show any material from the website in public;</li>
								<li>reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;]</li>
								<li>[edit or otherwise modify any material on the website; or]</li>
								<li>[redistribute material from this website [except for content specifically and expressly made available for redistribution].]</li>
							</ul>
							<p>[Where content is specifically made available for redistribution, it may only be redistributed [within your organisation].]</p>

							<h4><strong>Acceptable use</strong></h4>
							<p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>
							<p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>
							<p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without [NAME'S] express written consent.</p>
							<p>[You must not use this website to transmit or send unsolicited commercial communications.]</p>
							<p>[You must not use this website for any purposes related to marketing without [NAME'S] express written consent.]</p>

							<h4><strong>Restricted access</strong></h4>
							<p>[Access to certain areas of this website is restricted.]  [NAME] reserves the right to restrict access to [other] areas of this website, or indeed this entire website, at [NAME'S] discretion.</p>
							<p>If [NAME] provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.</p>
							<p>[[NAME] may disable your user ID and password in [NAME'S] sole discretion without notice or explanation.]</p>

							<h4><strong>User content</strong></h4>
							<p>In these terms and conditions, "your user content" means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.</p>
							<p>You grant to [NAME] a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media.  You also grant to [NAME] the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>
							<p>Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or [NAME] or a third party (in each case under any applicable law).</p>
							<p>You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.</p>
							<p>[NAME] reserves the right to edit or remove any material submitted to this website, or stored on [NAME'S] servers, or hosted or published upon this website.</p>
							<p>[Notwithstanding [NAME'S] rights under these terms and conditions in relation to user content, [NAME] does not undertake to monitor the submission of such content to, or the publication of such content on, this website.]</p>

							<h4><strong>No warranties</strong></h4>
							<p>This website is provided "as is" without any representations or warranties, express or implied.  [NAME] makes no representations or warranties in relation to this website or the information and materials provided on this website.</p>
							<p>Without prejudice to the generality of the foregoing paragraph, [NAME] does not warrant that:</p>
							<ul>
								<li>this website will be constantly available, or available at all; or</li>
								<li>the information on this website is complete, true, accurate or non-misleading.</li>
							</ul>
							<p>Nothing on this website constitutes, or is meant to constitute, advice of any kind.  [If you require advice in relation to any [legal, financial or medical] matter you should consult an appropriate professional.]</p>

							<h4><strong>Limitations of liability</strong></h4>
							<p>[NAME] will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:</p>
							<ul>
								<li>[to the extent that the website is provided free-of-charge, for any direct loss;]</li>
								<li>for any indirect, special or consequential loss; or</li>
								<li>for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.</li>
							</ul>
							<p>These limitations of liability apply even if [NAME] has been expressly advised of the potential loss.</p>

							<h4><strong>Exceptions</strong></h4>
							<p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit [NAME'S] liability in respect of any:</p>
							<ul>
								<li>death or personal injury caused by [NAME'S] negligence;</li>
								<li>fraud or fraudulent misrepresentation on the part of [NAME]; or</li>
								<li>matter which it would be illegal or unlawful for [NAME] to exclude or limit, or to attempt or purport to exclude or limit, its liability.</li>
							</ul>

							<h4><strong>Reasonableness</strong></h4>
							<p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable.</p>
							<p>If you do not think they are reasonable, you must not use this website.</p>

							<h4><strong>Other parties</strong></h4>
							<p>[You accept that, as a limited liability entity, [NAME] has an interest in limiting the personal liability of its officers and employees.  You agree that you will not bring any claim personally against [NAME'S] officers or employees in respect of any losses you suffer in connection with the website.]</p>
							<p>[Without prejudice to the foregoing paragraph,] you agree that the limitations of warranties and liability set out in this website disclaimer will protect [NAME'S] officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as [NAME].</p>

							<h4><strong>Unenforceable provisions</strong></h4>
							<p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>

							<h4><strong>Indemnity</strong></h4>
							<p>You hereby indemnify [NAME] and undertake to keep [NAME] indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by [NAME] to a third party in settlement of a claim or dispute on the advice of [NAME'S] legal advisers) incurred or suffered by [NAME] arising out of any breach by you of any provision of these terms and conditions[, or arising out of any claim that you have breached any provision of these terms and conditions].</p>

							<h4><strong>Breaches of these terms and conditions</strong></h4>
							<p>Without prejudice to [NAME'S] other rights under these terms and conditions, if you breach these terms and conditions in any way, [NAME] may take such action as [NAME] deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.</p>

							<h4><strong>Variation</strong></h4>
							<p>[NAME] may revise these terms and conditions from time-to-time.  Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website.  Please check this page regularly to ensure you are familiar with the current version.</p>

							<h4><strong>Assignment</strong></h4>
							<p>[NAME] may transfer, sub-contract or otherwise deal with [NAME'S] rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.</p>
							<p>You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions.</p>

							<h4><strong>Severability</strong></h4>
							<p>If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.  If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect.</p>

							<h4><strong>Entire agreement</strong></h4>
							<p>These terms and conditions [, together with [DOCUMENTS],] constitute the entire agreement between you and [NAME] in relation to your use of this website, and supersede all previous agreements in respect of your use of this website.</p>

							<h4><strong>Law and jurisdiction</strong></h4>
							<p>These terms and conditions will be governed by and construed in accordance with [GOVERNING LAW], and any disputes relating to these terms and conditions will be subject to the [non-]exclusive jurisdiction of the courts of [JURISDICTION].</p>

							<h4><strong>About these website terms and conditions</strong></h4>
							<p>
								We created these website terms and conditions with the help of a free website terms and conditions form developed by Contractology and available at <a href="#">www.yourwebsite.com</a>.
								Contractology supply a wide variety of commercial legal documents, such as <a href="#">template data protection statements</a>.
							</p>

							<h4><strong>Registrations and authorisations</strong></h4>
							<p>[[NAME] is registered with [TRADE REGISTER].  You can find the online version of the register at [URL].  [NAME'S] registration number is [NUMBER].]</p>
							<p>[[NAME] is subject to [AUTHORISATION SCHEME], which is supervised by [SUPERVISORY AUTHORITY].]</p>
							<p>[[NAME] is registered with [PROFESSIONAL BODY].  [NAME'S] professional title is [TITLE] and it has been granted in [JURISDICTION].  [NAME] is subject to the [RULES] which can be found at [URL].]</p>
							<p>[[NAME] subscribes to the following code[s] of conduct: [CODE(S) OF CONDUCT].  [These codes/this code] can be consulted electronically at [URL(S)].</p>
							<p>[[NAME'S] [TAX] number is [NUMBER].]]</p>

							<h4><strong>[NAME'S] details</strong></h4>
							<p>The full name of [NAME] is [FULL NAME].</p>
							<p>[[NAME] is registered in [JURISDICTION] under registration number [NUMBER].]</p>
							<p>[NAME'S] [registered] address is [ADDRESS].</p>
							<p>You can contact [NAME] by email to [EMAIL].</p>


							<p class="margin-top30">
								<strong>By using this  WEBSITE TERMS AND CONDITIONS template document, you agree to the
								<a href="#">terms and conditions</a> set out on
								<a href="#">yourdomain.com</a>.  You must retain the credit
								set out in the section headed "ABOUT THESE WEBSITE TERMS AND CONDITIONS".  Subject to the licensing restrictions, you should
								edit the document, adapting it to the requirements of your jurisdiction, your business and your
								website.  If you are not a lawyer, we recommend that you take professional legal advice in relation to the editing and
								use of the template.</strong>
							</p>


						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" id="terms-agree"><i class="fa fa-check"></i> I Agree</button>

							<a href="page-print-terms.html" target="_blank" rel="nofollow" class="btn btn-danger pull-left"><i class="fa fa-print"></i><span class="hidden-xs"> Print</span></a>
						</div>

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
			<!-- /MODAL -->





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
										<a href="#" data-toggle="modal" data-target="#termsModal">Privacy</a>
									</ul>
									Bienvenido a El Corazon Golf Club &copy; 2015. Reservados todos los derechos
								</div>
							</div>
						</footer>
						<!-- /FOOTER -->
						<!-- MODAL -->
						<div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
										<h4 class="modal-title" id="myModal">Privacy</h4>
									</div>

									<div class="modal-body modal-short">
										<p>Scope and content of the Web Site<br />
											The purpose of his web page is merely informative and its use is of exclusive responsibility of the user. All the information and images of the Golf Course exposed by EL CORAZON GOLF CLUB belong to &ldquo;El Corazon Golf Club&rdquo; and should not be used outside this website, copied or distributed.<br />
											The brand EL CORAZON GOLF CLUB and it&rsquo;s logotype are copyrighted and protected by the International laws and agreements involved.</p>

											<p>El Corazon Golf Club Website Privacy Statement</p>

											<p>This document was last updated on January 20, 2013.</p>

											<p>1. ACKNOWLEDGMENT AND ACCEPTANCE OF TERMS &#8232;El Corazon Golf Club (referred to herein as &ldquo;El Corazon&rdquo;, &ldquo;we&rdquo;, &ldquo;us&rdquo; and &ldquo;our&rdquo;) is committed to protecting your privacy. This Privacy Statement sets forth our current privacy practices with regard to the information we collect when you or your computer interact with our website. By accessing ELCORAZONGOLFCLUB. you acknowledge and fully EL CORAZON&rsquo;s Privacy Statement and freely consent to the information collection and use practices described in this Website Privacy Statement.<br />
											2. PARTICIPATING MERCHANT POLICIES &#8232;&#8232;Related services and offerings with links from this website, including vendor sites, have their own privacy statements that can be viewed by clicking on the corresponding links within each respective website. Online merchants and others who participate in EL CORAZON GOLF CLUB services are encouraged to participate in industry privacy initiatives and to take a responsible attitude towards consumer privacy. However, since we do not have direct control over the policies or practices of participating merchants and other third parties, we are not responsible for the privacy practices or contents of those sites. We recommend and encourage that you always review the privacy policies of merchants and other third parties before you provide any personal information or complete any transaction with such parties.<br />
											3. INFORMATION WE COLLECT AND HOW WE USE IT &#8232;&#8232;EL CORAZON GOLF CLUB collects certain information from and about its users three ways: directly from our Web Server logs, the user, and with Cookies.&#8232;<br />
											&#9702; a. Web Server Logs.&#8232;&#8232;When you visit our Website, we may track information to administer the site and analyze its usage. Examples of information we may track include: &#8232;</p>

											<p>&#9642; Your Internet protocol address.</p>

											<p>&#9642; The kind of browser or computer you use.</p>

											<p>&#9642; Number of links you click within the site.</p>

											<p>&#9642; State or country from which you accessed the site.</p>

											<p>&#9642; Date and time of your visit.</p>

											<p>&#9642; Name of your Internet service provider.</p>

											<p>&#9642; Web page you linked to our site from.</p>

											<p>&#9642; Pages you viewed on the site.</p>

											<p>&#9702; b. Use of Cookies&#8232;&#8232;EL CORAZON may use cookies to personalize or enhance your user experience. A cookie is a small text file that is placed on your hard disk by a Web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a Web Server in the domain that issued the cookie to you. One of the primary purposes of cookies is to provide a convenience feature to save you time. For example, if you personalize a web page, or navigate within a site, a cookie helps the site to recall your specific information on subsequent visits. Hence, this simplifies the process of delivering relevant content and eases site navigation by providing and saving your preferences and login information as well as providing personalized functionality. EL CORAZON reserves the right to share aggregated site statistics with partner companies, but does not allow other companies to place cookies on our website unless there is a temporary, overriding customer value (such as merging into EL CORAZON WEBSITE a site that relies on third-party cookies). You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies. If you reject cookies by changing your browser settings then be aware that this may disable some of the functionality on our Website.</p>

											<p>&#9702; c. Personal Information Users&#8232;&#8232;Visitors to our website can register for services. When you register, we will request some personal information such as name, address, email, telephone number or facsimile number, account number, credit card number, and other relevant information. If you are purchasing a service, we will request financial information. Any financial information we collect is used only to bill you for the services you purchased. If you purchase by credit card, this information may be forwarded to your credit card provider. For other types of registrations, we will ask for the relevant information. You may also be asked to disclose personal information to us so that we can provide assistance and information to you. For example, such data may be warranted in order to provide online technical support and troubleshooting. We will not disclose personally identifiable information we collect from you to third parties without your permission except to the extent necessary including:&#8232;</p>

											<p>&#9642; To fulfill your service requests for services.</p>

											<p>&#9642; To protect ourselves from liability,</p>

											<p>&#9642; To respond to legal process or comply with law, or</p>

											<p>&#9642; In connection with a merger, acquisition, or liquidation of the company.</p>

											<p>4. USE OF WEB BEACONS OR GIF FILES&#8232;&#8232;ELCORAZON WEBSITE Web pages may contain electronic images known as Web beacons &ndash; sometimes also called single-pixel gifs &ndash; that allow EL CORAZON to count users who have visited those pages and to deliver co-branded services. EL CORAZON may include Web beacons in promotional e-mail messages or newsletters in order to determine whether messages have been opened and acted upon.&#8232;Some of these Web beacons may be placed by third party service providers to help determine the effectiveness of our advertising campaigns or email communications. These Web beacons may be used by these service providers to place a persistent cookie on your computer. This allows the service provider to recognize your computer each time you visit certain pages or emails and compile anonymous information in relation to those page views, which in turn enables us and our service providers to learn which advertisements and emails bring you to our website and how you use the site. EL CORAZON prohibits Web beacons from being used to collect or access your personal information.<br />
											5. CHILDREN&#8232;&#8232;EL CORAZON WEBSITE is not directed to individuals under the age of thirteen (13). We request that such individuals not provide any personal information through the el corazon WEBSITE.<br />
											6. CHANGES TO THIS STATEMENT&#8232;&#8232;El CORAZON has the discretion to occasionally update this privacy statement. When we do, we will also revise the &ldquo;updated&rdquo; date at the top of this Privacy page. We encourage you to periodically review this privacy statement to stay informed about how we are helping to protect the personal information we collect. Your continued use of the service constitutes your agreement to this privacy statement and any updates.<br />
											7. CONTACTING US&#8232;&#8232;If you have questions regarding our Privacy Statement, its implementation, failure to adhere to this Privacy Statement and/or our general practices, please contact us:&#8232;By www.elcorazongolfclub.com in the contact us &aacute;rea.<br />
											 </p>

											<p>EL CORAZON GOLF CLUB will use commercially reasonable efforts to promptly respond and resolve any problem or question.</p>

									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									</div>

								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- /MODAL -->

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


		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">

			/**
				Checkbox on "I agree" modal Clicked!
			**/
			jQuery("#terms-agree").click(function(){
				jQuery('#termsModal').modal('toggle');

				// Check Terms and Conditions checkbox if not already checked!
				if(!jQuery("#checked-agree").checked) {
					jQuery("input.checked-agree").prop('checked', true);
				}

			});
		</script>
	</body>
</html>
