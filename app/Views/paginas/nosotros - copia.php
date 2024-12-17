<?php

$this->setData([
	'title' => 'DamoraNet. Tu Agencia de Marketing Digital en República Dominicana',
	'descripcion' => 'DamoraNet, agencia de marketing digital para todos los países.  
Cuenta con expertos profesionales en seo, diseño web, publicidad digital (SEM), analítica digital, 
redes sociales, branding estratégico, estrategia digital. ¡Contáctanos!.',
]);

$this->extend('plantilla/layout');

?>

<?php echo $this->Section("cuerpo"); ?>

<!-- CONTENIDO PRINCIPAL -->
<div class="main-content-wrapper">

	<!-- STUNNING HEADER -->
	<section class="crumina-stunning-header section-image-bg-blue-light">

		<div class="container">
			<!-- STUNNING HEADER CONTENT -->
			<div class="stunning-header-content align-center">

				<!-- PAGE TITLE -->
				<h1 class="page-title text-white ">Más que Agencia Digital</h1>
				<!-- /PAGE TITLE -->

				<!-- BREADCRUMBS -->
				<div class="crumina-breadcrumbs">

					<!-- BREADCRUMBS LIST -->
					<ul class="breadcrumbs">

						<!-- BREADCRUMBS ITEM -->
						<li class="breadcrumbs-item">
							<a href="<?= base_url() ?>"> Inicio </a>
						</li>
						<!-- /BREADCRUMBS ITEM -->

						<!-- BREADCRUMBS ITEM -->
						<li class="breadcrumbs-item trail-end">
							<span class="crumina-icon">»</span>
							<span>Somos: Solución Digital</span>
						</li>
						<!-- /BREADCRUMBS ITEM -->

					</ul>
					<!-- /BREADCRUMBS LIST -->

				</div>
				<!-- /BREADCRUMBS -->

			</div>
			<!-- /STUNNING HEADER CONTENT -->
		</div>

	</section>
	<!-- /STUNNING HEADER -->


	<!-- QUIENES SOMOS INTRODUCCION --->
	<section class="large-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading mb-3">
						<!-- CRUMINA HEADING TITLE -->
						<div class="title-text-wrap">
							<h2 class="heading-title ">¡Bienvenidos a Damoranet, tu aliado estratégico en el mundo digital!</h2>
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING DECORATION -->
						<div class="heading-decoration "></div>
						<!-- /CRUMINA HEADING DECORATION  -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text">
							Somos una agencia de marketing digital, dedicada a potenciar la presencia en línea de tu marca,
							proyecto o empresa, sin importar el tamaño.
						</div>

						<div class="heading-text">
							Contamos con un equipo de especialistas en Posicionamiento Web (SEO), Consultoría Digital, Sitios Web,
							Publicidad Digital (SEM), Analítica Digital, Gestión y Estrategia en Redes Sociales y Comercio Electrónico,
							para garantizar el éxito de tu negocio en el entorno digital.
						</div>

						<div class="heading-text">
							En DamoraNet nos especializamos en una amplia gama de servicios digitales para llevar tu proyecto al siguiente nivel.</div>

						<div class="heading-text">
							Con sede en República Dominicana y en colaboración con una empresa española en Madrid (España),
							donde contamos con expertos del marketing digital, hemos trabajado en diversos proyectos internacionales
							y ahora nuestro objetivo es ofrecer nuestra experiencia y conocimientos en el mercado local.</div>

						<div class="heading-text">
							“No importa que tan bueno sea tu producto, si nadie lo conoce, no existes.” - Shiv Singh PepsiCo </div>
					</header>
				</div>
			</div>
		</div>
	</section>
	<!-- /QUIENES SOMOS INTRODUCCION-->
	<!-- ENFOQUE -->
	<section class="large-padding-top section-image-bg-yellow">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto align-center">
					<header class="crumina-module crumina-heading mb-5">
						<!-- CRUMINA HEADING TITLE -->
						<div class="title-text-wrap">
							<h2 class="heading-title "> Nuestro Enfoque</h2>
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text">Combinamos la pasión e innovación de forma meticulosa y comprometida para lograr resultados excepcionales.</div>
						<!-- /CRUMINA HEADING TEXT -->
					</header>
				</div>

				<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 m-auto align-center ">
					<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/11-our-vision.svg') ?>" alt="Vision">
				</div>
			</div>
		</div>
	</section>
	<!-- /ENFOQUE -->

	<!-- ULTIMOS TRABAJOS -->
	<?php //$this->load->view('bloques/portfolio.php'); 
	?>
	<!-- /ULTIMOS TRABAJOS -->


	<!-- TESTIMONIOS DE CLIENTES -->
	<?= $this->include('bloques/testimonios.php'); ?>
	<!-- /TESTIMONIOS DE CLIENTES -->

	<!-- CTA FINAL -->
	<section class="large-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<header class="crumina-module crumina-heading mb-4">
						<!-- CRUMINA HEADING TITLE -->
						<div class="title-text-wrap">
							<h2 class="heading-title">¡Contáctanos hoy! </h2>
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING DECORATION -->
						<div class="heading-decoration"></div>
						<!-- /CRUMINA HEADING DECORATION  -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text">¿Estás listo para llevar tu empresa al siguiente nivel?</div>
						<!-- /CRUMINA HEADING TEXT -->
					</header>

					<a href="<?= base_url('contacto') ?>" class="crumina-button button--dark button--l">Me interesa</a>
				</div>
				<!-- LOGOTIPOS DE CLIENTES -->
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 align-center">
					<a href="#" class="crumina-module clients-item mb-5">
						<img loading="lazy" class="crumina-icon" src="" alt="">
					</a>
					<a href="#" class="crumina-module clients-item mb-5">
						<img loading="lazy" class="crumina-icon" src="" alt="">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 align-center">
					<a href="#" class="crumina-module clients-item mb-5">
						<img loading="lazy" class="crumina-icon" src="" alt="">
					</a>
					<a href="#" class="crumina-module clients-item mb-5">
						<img loading="lazy" class="crumina-icon" src="" alt="">
					</a>
					<!-- /LOGOTIPOS DE CLIENTES -->
				</div>
			</div>
		</div>
	</section>
	<!-- /CTA FINAL -->

</div>
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>