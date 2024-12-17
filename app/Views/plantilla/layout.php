<!DOCTYPE html>
<html lang="es-ES">

<!-- HEADER AREA -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('theme-topten/css/vendors/Bootstrap/bootstrap.min.css') ?>">
    <link href="<?= base_url('theme-topten/css/plugins/navigation.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('theme-topten/css/main.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('theme-topten/css/theme-font.min.css') ?>">
    <script>
        window.MSInputMethodContext && document.documentMode && document.write('<script src="<?= base_url('theme-topten/js/ie11CustomProperties.js') ?>"><\x2fscript>');
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets-damoranet/img/favicon/android-chrome-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets-damoranet/img/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets-damoranet/img/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets-damoranet/img/favicon/site.webmanifest') ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3EVDQ0RRD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Y3EVDQ0RRD');
    </script>
</head>

<body>
    <!-- CABECERA PRINCIPAL CON EL MENU -->
    <nav id="site-header" class="site-header navigation navigation-justified sticky-top">
        <div class="top-bar top-bar-dark">
            <div class="container">
                <div class="top-bar-content">
                    <div class="top-bar-item">
                        +1 (849) 356-1112
                    </div>
                    <div class="top-bar-item">
                        <a href="#">info@damoranet.com</a>
                    </div>
                    <div class="top-bar-item">
                        <span>Lun. - Vie. </span> 09:00 - 19:00
                    </div>
                    <div class="top-bar-item follow_us">
                        <span>Síguenos:</span>
                        <div class="socials">
                            <!--<a class="social-item" href="#">
                        <img loading="lazy"  width="16" height="16" class="crumina-icon" 
                        src="<?= base_url('theme-topten/img/theme-content/social-icons/facebook.svg') ?>" alt="facebook">
                    </a>-->
                            <!--<a class="social-item" href="#">
                        <img loading="lazy"  width="16" height="16" class="crumina-icon" 
                        src="<?= base_url('theme-topten/img/theme-content/social-icons/twitter.svg') ?>" alt="twitter">
                    </a>-->
                            <a class="social-item" href="https://goo.gl/maps/ARXAY6oNbLaK5qDt8" target="_blank">
                                <img loading="lazy" width="16" height="16" class="crumina-icon"
                                    src="<?= base_url('theme-topten/img/theme-content/social-icons/google.svg') ?>"
                                    alt="DamoraNet en Google">
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="top-bar-close" id="top-bar-close-js">
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>

        <!-- MAIN HEADER CONTAINER -->
        <div class="container">
            <div class="navigation-header">
                <div class="navigation-logo">
                    <a class="site-logo" href="<?= base_url('') ?>">
                        <img loading="lazy"
                            src="<?= base_url('theme-topten/img/logo/logo-white.svg') ?>" alt="logo DamoraNet" width="35">
                        <div class="logo-text">
                            <div class="logo-title"><span class="weight-black">Damora</span>Net</div>
                            <div class="logo-sub-title">Agencia de Marketing Digital</div>
                        </div>
                    </a>
                </div>
                <div id="top-bar-js" class="top-bar-link">
                    <svg class="crumina-icon" width="20" height="16">
                        <use xlink:href="#icon-users"></use>
                    </svg>
                </div>
                <div class="navigation-button-toggler">
                    <i class="hamburger-icon"></i>
                </div>
            </div>
            <div class="navigation-body">
                <div class="navigation-body-header">
                    <div class="navigation-logo">
                        <a class="site-logo" href="<?= base_url('') ?>">
                            <div class="logo-text">
                                <img loading="lazy"
                                    src="<?= base_url('assets-damoranet/img/logo/logo-damoranet-blanco-399x133.jpg') ?>"
                                    alt="logo DamoraNet, agencia de Marketing Digital" width="250">
                                <!--<div class="logo-title"><span class="weight-black">Damora</span>Net</div>-->
                                <div class="logo-sub-title">MARKETING DIGITAL EN REPÚBLICA DOMINICANA</div>
                            </div>
                        </a>
                    </div>
                    <span class="navigation-body-close-button">&#10005;</span>
                </div>
                <ul class="navigation-menu">
                    <li class="navigation-item">
                        <a class="navigation-link" href="<?= base_url('nosotros') ?>">Nosotros</a>
                    </li>
                    <li class="navigation-item">
                        <a class="navigation-link" href="#">Servicios</a>
                        <ul class="navigation-dropdown">
                            <!-- POSICIONAMIENTO WEB - SEO -->
                            <li class="navigation-dropdown-item">
                                <a class="navigation-dropdown-link" href="<?= base_url('posicionamiento-seo') ?>">
                                    <svg class="crumina-icon" width="30" height="30">
                                        <use xlink:href="#icon-search-engine"></use>
                                    </svg>
                                    Posicionamiento Web (SEO)</a>
                            </li>
                            <!-- /POSICIONAMIENTO WEB - SEO -->
                            <!-- ENLACE DE DISEÑO WEB -->
                            <li class="navigation-dropdown-item">
                                <a class="navigation-dropdown-link" href="<?= base_url('diseno-web') ?>">
                                    <svg class="crumina-icon" width="30" height="30">
                                        <use xlink:href="#icon-services"></use>
                                    </svg>
                                    Diseño Web</a>
                            </li>
                            <!-- /ENLACE DISEÑO WEB -->
                            <li class="navigation-dropdown-item">
                                <!-- ENLACE SOCIAL MEDIA -->
                                <a class="navigation-dropdown-link" href="<?= base_url('social-media-marketing') ?>">
                                    <svg class="crumina-icon" width="30" height="30">
                                        <use xlink:href="#icon-social-media"></use>
                                    </svg>
                                    Social Media Marketing</a>
                                <!-- /ENLACE SOCIAL MEDIA -->
                            </li>
                            <!-- PUBLICIDAD ONLINE PPC -->
                            <li class="navigation-dropdown-item">
                                <a class="navigation-dropdown-link" href="<?= base_url('publicidad-digital') ?>">
                                    <svg class="crumina-icon" width="30" height="30">
                                        <use xlink:href="#icon-pay-click"></use>
                                    </svg>
                                    Publicidad Digital (PPC)</a>
                            </li>
                            <!-- /PUBLICIDAD ONLINE PPC-->
                        </ul>
                    </li>
                    <li class="navigation-item">
                        <a class="navigation-link" href="<?= base_url('blog-indice') ?>">Blog</a>
                    </li>
                    <li class="navigation-item">
                        <a class="navigation-link" href="<?= base_url('contacto') ?>">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CABECERA PRINCIPAL CON EL MENU -->
    <!-- /HEADER AREA -->

    <!-- CONTENIDO PRINCIPAL -->
    <?= $this->renderSection('cuerpo'); ?>
    <!-- /CONTENIDO PRINCIPAL -->

    <!-- FOOTER AREA -->
    <footer id="site-footer" class="footer dark-section">
        <div class="container">
            <!-- FOOTER CONTENIDO -->
            <div class="footer-content">
                <div class="row justify-content-between">
                    <div class="col-lg-7 col-md-6 col-sm-12 mb-md-0">
                        <div class="widget w-info widget--footer mb-4">
                            <h4 class="widget-title">Marketing Digital</h4>
                            <p class="widget-text">Somos especialistas en Marketing Digital y podemos ayudarle con su proyecto o negocio en el mundo online. Por muy grande o pequeño que sea
                                su proyecto, nosotros estamos ahí para apoyarlo. Consúltenos sin comprosmiso y verá lo que podemos hacer por usted y por su comapañía.</p>
                            <div class="socials">
                                <!--<a class="social-item" href="#">
                                        <img loading="lazy" width="32" height="32" class="crumina-icon"  
                                        src="<?= base_url('theme-topten/img/theme-content/social-icons/facebook.svg') ?>" alt="facebook">
                                    </a>-->
                                <!--<a class="social-item" href="#">
                                        <img loading="lazy" width="32" height="32" class="crumina-icon"  
                                        src="<?= base_url('theme-topten/img/theme-content/social-icons/twitter.svg') ?>" alt="twitter">
                                    </a>-->
                                <a class="social-item" href="https://goo.gl/maps/ARXAY6oNbLaK5qDt8" target="_blank">
                                    <img loading="lazy" width="32" height="32" class="crumina-icon"
                                        src="<?= base_url('theme-topten/img/theme-content/social-icons/google.svg') ?>" alt="DamoraNet en Google">
                                </a>
                                <!--<a class="social-item" href="#">
                                        <img loading="lazy" width="32" height="32" class="crumina-icon"  
                                        src="<?= base_url('theme-topten/img/theme-content/social-icons/youtube.svg') ?>" alt="youtube">
                                    </a>-->
                                <!--<a class="social-item" href="#">
                                        <img loading="lazy" width="32" height="32" class="crumina-icon"  
                                        src="<?= base_url('theme-topten/img/theme-content/social-icons/rss.svg') ?>" alt="rss">
                                    </a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 mb-4 mb-md-0">
                        <div class="widget widget_links widget--footer">
                            <h4 class="widget-title">Servicios</h4>
                            <ul>
                                <li>
                                    <a href="<?= base_url('posicionamiento-seo') ?>">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Posicionamiento Web (SEO)
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('publicidad-digital') ?>">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Publicidad Digital (PPC)
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('diseno-web') ?>">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Diseño Web
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 mb-4 mb-md-0">
                        <div class="widget widget_links widget--footer">
                            <h4 class="widget-title"> Servicios adicionales </h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Branding estrategico de la marca
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Generación de leads
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Marketing de contenido
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg class="crumina-icon" width="4" height="6">
                                            <use xlink:href="#icon-arrow-triangle-left"></use>
                                        </svg>
                                        Copywriting
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /FOOTER CONTENIDO -->
            <!-- FOOTER CONTACTOS -->
            <div class="contacts">
                <!-- FOOTER CONTACTOS ITEM -->
                <div class="contacts-item">
                    <div class="crumina-module js-animate-icon">
                        <svg class="crumina-icon c-yellow-themes" width="70" height="70" enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                stroke-width="2" />
                            <path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <path d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="2" />
                            <path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                stroke-width="2" />
                        </svg>
                    </div>
                    <div class="content">
                        <div class="sub-title c-white">+1 (849) 356-1112</div>
                        <p class="sub-title">Lun-Vie 9am-7pm</p>
                    </div>
                </div>
                <!-- /FOOTER CONTACTOS ITEM -->
                <!-- FOOTER CONTACTOS ITEM -->
                <div class="contacts-item">
                    <div class="crumina-module js-animate-icon">
                        <svg class="crumina-icon c-red-themes" width="70" height="70" enable-background="new 0 0 64 64" version="1.1"
                            viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <polyline fill="none" points="  54,17 32,36 10,17 " stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="2" x1="10.9" x2="26" y1="48" y2="36" />
                            <path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                stroke-width="2" />
                            <circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <g>
                                <circle cx="45.4" cy="38.3" fill="none" stroke="currentColor" r="0.9" />
                                <path d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z"
                                    fill="none" stroke="currentColor" />
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <a href="mailto:info@topten.com" class="sub-title c-white">info@damoranet.com</a>
                    </div>
                </div>
                <!-- /FOOTER CONTACTOS ITEM -->
                <!-- FOOTER CONTACTOS ITEM -->
                <div class="contacts-item">
                    <div class="crumina-module js-animate-icon">
                        <svg class="crumina-icon c-green-themes" width="70" height="70" enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <polygon fill="none" points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   " stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polygon>
                            <circle cx="32" cy="32" fill="none" r="4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                            <path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                    <div class="content">
                        <div class="sub-title c-white">Santo Domingo, República Dominicana</div>
                        <p class="sub-title">Avda. República de Colombia</p>
                    </div>
                </div>
                <!-- /FOOTER CONTACTOS ITEM -->
            </div>
            <!-- /FOOTER CONTACTOS -->
        </div>
        <!-- SUB FOOTER -->
        <div class="sub-footer">
            © 2022 Damoranet
            <a href="<?= base_url() ?>diseno-web">Diseño Web: DamoraNet</a>
            -
            <a href="<?= base_url() ?>aviso-legal">(Aviso Legal)</a>
            <br>
            (t: {elapsed_time} s. / m: {memory_usage}) - Ver.2024-12-15
        </div>
        <!-- /SUB FOOTER -->
    </footer>
    <!-- CARGA DE SCRIPTS-->
    <script src="<?= base_url('theme-topten/js/js-plugins/navigation.min.js') ?>" defer></script>
    <script src="<?= base_url('theme-topten/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/Bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/js-plugins/waypoints.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/js-plugins/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/js-plugins/select2.min.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/js-plugins/swiper.min.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/js-plugins/anime.min.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/main.js') ?>"></script>
    <script src="<?= base_url('theme-topten/js/svg-loader.js') ?>"></script>
    <!-- /CARGA DE SCRIPTS-->
    <!-- /FOOTER AREA -->
</body>

</html>