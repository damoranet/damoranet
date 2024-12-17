<?php

$this->setData([
	'title' => 'DamoraNet. Tu Agencia de Marketing Digital en República Dominicana<',
	'descripcion' => 'Somos un equipo de profesionales especializados en marketing digital, con experiencia en el sector de diseño  de páginas web, publicidad digital y la optimización de motores de búsqueda. Nuestra misión es ayudar a los negocios a expandirse y lograr un crecimiento sostenible. Proporcionándoles servicios integrales que abarcan desde la creación de contenido hasta la gestión de campañas publicitarias, pasando por la gestión de redes sociales.',
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
				<h1 class="page-title text-white "> Más que una solución digital </h1>
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
							<span>Sobre nuestra agencia </span>
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
							<h2 class="heading-title "> Quiénes somos </h2>
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING DECORATION -->
						<div class="heading-decoration "></div>
						<!-- /CRUMINA HEADING DECORATION  -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text">
							DamoraNet es una Agencia de Marketing Digital, con base en Santo Domingo (República Dominicana). Especializada en Posicionamiento Web (SEO), Publicidad Digital, Diseño de Sitios Web, y más.
						</div>

						<div class="heading-text">
							Aliada estratégica de <strong>CRM </strong> <strong> Sistemas </strong>, compañía con sede en Madrid (España).
							Desde entonces hemos trabajado en muchos proyectos internacionales y ahora nuestro objetivo es ofrecer nuestra experiencia y conocimientos en el mercado local.
						</div>

					</header>
				</div>
			</div>
		</div>
	</section>
	<!-- /QUIENES SOMOS INTRODUCCION-->

	<!-- NUESTRA METODOLOGIA -->
	<section class="large-padding section-image-bg-lime">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<div class="crumina-module crumina-module-slider crumina-slider--vertical pagination-left-center">
						<div class="swiper-container" data-prev-next="1" data-direction="vertical" data-loop="false">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="row align-items-center">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
											<h2> Nuestra metodología </h2>
											<p class="c-white mb-4">
												Nos centramos en diseñar, implementar y ejecutar estrategias de comunicación personalizadas, basándonos en los conocimientos del Marketing Digital, con la integración de:
											</p>

										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/10-we-work.svg') ?>" alt="Case">
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row align-items-center">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
											<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/10-we-work.svg') ?>" alt="Case">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<h2> Creatividad </h2>
											<p class="c-white mb-4">La creatividad se ha convertido en un elemento esencial para lograr el éxito de cualquier negocio digital. En este sentido, se requiere una estrategia creativa que permita llevar a cabo campañas efectivas de marketing digital, con el objetivo de obtener los resultados deseados.
											</p>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row align-items-center">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
											<h2> Innovación </h2>
											<p class="c-white mb-4">Intentamos que las compañías se ajusten a las modernas tendencias y herramientas para seguir siendo competitivas. La innovación es un elemento esencial para el logro en el marketing digital, ya que da la posibilidad de fabricar productos y servicios exclusivos que satisfagan las demandas de los usuarios.
											</p>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/10-we-work.svg') ?>" alt="Case">
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row align-items-center">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
											<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/10-we-work.svg') ?>" alt="Case">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<h2> Tecnología </h2>
											<p class="c-white mb-4"> Para nadie es secreto que el avance de la tecnología ha hecho que sea posible
												mejorar los procesos de negocios digitales y mediante el uso apropiado de la misma, e implementación
												de herramientas pertinentes, podemos lograr que las empresas mejoren su productividad, reduzcan sus
												costes y aumente la satisfacción del cliente.
											</p>

										</div>
									</div>
								</div>
							</div>
							<!-- If we need pagination -->
							<div class="swiper-pagination swiper-pagination-dark"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- /NUESTRA METODOLOGIA-->

	<!-- NUESTRO EQUIPO -->
	<section class="large-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 m-auto align-center">
					<header class="crumina-module crumina-heading mb-5">
						<!-- CRUMINA HEADING TITLE -->
						<div class="title-text-wrap">
							<h2 class="heading-title "> Nuestro equipo
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING DECORATION -->
						<div class="heading-decoration "></div>
						<!-- /CRUMINA HEADING DECORATION  -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text"> Con profesionalismo,carisma y pasión, trabajamos en tu proyecto digital
							<!-- /CRUMINA HEADING TEXT -->
					</header>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 ">
					<div class="crumina-module crumina-teammember-item">
						<div class="teammember-item-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/teammembers/teammember2.png') ?>" alt="teammember">
						</div>
						<h5 class="teammember-author-name">Darya Figueroa</h5>
						<div class="teammember-author-prof">Presidenta co-Fundadora </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 ">
					<div class="crumina-module crumina-teammember-item">
						<div class="teammember-item-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/teammembers/teammember3.png') ?>" alt="teammember">
						</div>
						<h5 class="teammember-author-name">Pablo Revilla</h5>
						<div class="teammember-author-prof"> Gerente co-Fundador </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
					<div class="crumina-module crumina-teammember-item">
						<div class="teammember-item-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/teammembers/teammember4.png') ?>" alt="teammember">
						</div>
						<h5 class="teammember-author-name">Alfonso Pérez</h5>
						<div class="teammember-author-prof">Sistemas</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 ">
					<div class="crumina-module crumina-teammember-item">
						<div class="teammember-item-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/teammembers/teammember1.png') ?>" alt="teammember">
						</div>
						<h5 class="teammember-author-name">Joan Flores</h5>
						<div class="teammember-author-prof">Copywriter</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /NUESTRO EQUIPO -->

	<!-- TRES ICONOS -->
	<section class="large-padding bg-grey-theme">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<div class="crumina-module crumina-info-box info-box--standard">
						<div class="info-box-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/icon31.svg') ?>" alt="Support">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title"> Análisis </h5>
							<p class="info-box-text">.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<div class="crumina-module crumina-info-box info-box--standard">
						<div class="info-box-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/icon32.svg') ?>" alt="Un equipo impresionante">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title"> Estrategias </h5>
							<p class="info-box-text"></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--standard">
						<div class="info-box-thumb">
							<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/icon33.svg') ?>" alt="Rendimiento más rápido ">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title"> Implementación </h5>
							<p class="info-box-text"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /TRES ICONOS -->

	<!-- VISION MISION VALORES -->
	<section class="large-padding-top section-image-bg-yellow">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto align-center">
					<header class="crumina-module crumina-heading mb-5">
						<!-- CRUMINA HEADING TITLE -->
						<div class="title-text-wrap">
							<h2 class="heading-title "> Visión</h2>
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text">Que muchas empresas dominicanas se beneficien de nuestra plataforma y servicios digitales, lo cual les permitirá ser un modelo a seguir para los emprendimientos y proyectos relacionados con el Marketing Digital.</div>
						<!-- /CRUMINA HEADING TEXT -->
					</header>
				</div>

				<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 m-auto align-center ">
					<img loading="lazy" src="<?= base_url('theme-topten/img/demo-content/icons/11-our-vision.svg') ?>" alt="Vision">
				</div>
			</div>
		</div>
	</section>
	<!-- /VISION MISION VALORES -->

	<!-- ULTIMOS TRABAJOS -->
	<?php /* echo $this->include('bloques/portfolio.php'); */ ?>
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
							<h2 class="heading-title"> Hablemos </h2>
						</div>
						<!-- /CRUMINA HEADING TITLE -->

						<!-- CRUMINA HEADING DECORATION -->
						<div class="heading-decoration"></div>
						<!-- /CRUMINA HEADING DECORATION  -->

						<!-- CRUMINA HEADING TEXT -->
						<div class="heading-text">Es momento de actuar y darle un giro positivo a tu negocio. ¡Nosotros te ayudamos a lograrlo!. Whatsapeanos o vayamos por un café.</div>
						<!-- /CRUMINA HEADING TEXT -->
					</header>

					<a href="<?= base_url() ?>contacto" class="crumina-button button--dark button--l"> Contáctanos sin compromiso </a>
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