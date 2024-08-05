<title>.......................... |DamoraNET| </title>

<meta name="description" content="El SEO o Posicionamiento en buscadores es una herramienta fundamental para cualquier negocio digital. El Posicionamiento Web ayuda a mejorar la visibilidad de tu sitio web en los motores de búsqueda, lo que le permite a los usuarios encontrar fácilmente tu contenido y servicios digitales."/>
</head>
<body>


   <!-- HEADER MENU -->
   <?= $this->include('plantilla/header-menu.php'); ?>
   <!-- /HEADER MENU -->

	<!-- CONTENIDO PRINCIPAL -->
	<div class="main-content-wrapper">

		<div class="medium-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 m-auto">

						<!-- POST DETAILS -->
						<article class="entry post post-standard has-post-thumbnail post-standard-details post-standard-details--wide">

							<h1 class="h1 post-title">Aquí va el título H1</h1>

							<div class="post-details-content">
								<div class="wp-caption alignnone">
									<img loading="lazy" 
									src="<?= base_url('theme-topten/img/blog/nombre-imagen.jpg') ?>" 
									alt="Titulo alternativo">
									<div class="wp-caption-text">Aquí describimos la imagen
									</div>
								</div>

								<p>
									Este es el primer párrafo
								</p>
								<p>
									Y este es el segundo parrafo
								</p>


								<!-- BOTON LEER MAS ARTICULOS -->
								<div class="row mt-5 justify-content-center align-center">
									<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
										<a href="<?= base_url('blog-indice') ?>" class="crumina-button button--secondary button--with-icon button--icon-right button--xs">
											Leer más artículos del Blog
											<svg class="crumina-icon" width="15" height="9">
												<path fill="#27C7CD" fill-rule="evenodd" d="M9.427.139a.528.528 0 00-.705 0 .426.426 0 000 .637l3.577 3.259H.494c-.275 0-.494.2-.494.45 0 .252.219.457.494.457h11.805L8.722 8.196a.432.432 0 000 .643.53.53 0 00.705 0l4.425-4.032a.416.416 0 000-.636L9.427.139z" />
											</svg>
										</a>
									</div>
								</div>
								<!-- /BOTON LEER MAS ARTICULOS -->

							</div>

						</article>
						<!-- /POST DETAILS -->

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /MAIN CONTENT WRAPPER -->


