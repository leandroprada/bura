<?php
 session_start(); 
 ?>
 
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="keywords" content="Seleccion,Consultoria,Recursos,Humanos,Cordoba">
       <meta name="author" content="Grayrids">
    <title>STC - SELECTION TRAINING CONSULTING</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/color-switcher.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1425608347910517",
    enable_page_level_ads: true
  });
</script>
  </head>

  <body>
    <!-- Header Section Start -->
    <header id="slider-area">
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="img/stc2.png" alt=""></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Servicios</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li>     -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Cursos</a>
              </li>
            <!--   <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>  -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">El Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="./novedades.php">Novedades</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="./postulate.php">Postulate</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li>  -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contactenos">Contacto</a>
              </li>
			
			
			<?php
 
			 if ($_SESSION['login'] == "validated") {
				echo '<li class="nav-item">
					   <a class="nav-link page-scroll" href="./resources.php">Contenido Exclusivo</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link page-scroll" href="./login/logout.php">Logout</a>
					  </li>';
				}
			else {
				echo '<li class="nav-item">
						<a class="nav-link page-scroll" href="./login/login.php">Login</a>
					  </li>';
				}
			  
			 ?>
			</ul>
		  </div>
        </div>

	  </nav>


      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slider/bg-1.jpg" alt="">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">STC - SELECTION TRAINING CONSULTING </h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">Recursos Humanos</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">Su mejor opción en Córdoba</h4>
                <a href="#contactenos" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Contacto</a>
                <a href="#services" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Conózcanos!</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/bg-3.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Nos especializamos en</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Cursos de Selecci&oacute;n IT</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Con material actualizado</h4>
                <a href="#portfolios" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">Ver Cursos</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/bg-2.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Necesitas:</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Búsquedas y selecci&oacute;n?</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.6s">Podemos ayudarte</h4>
                <a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Contactanos</a>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSdC3r-62uoIuA0nKSRKRJJTKIq4u4k7mNk_PWb5NN2VIe20vA/viewform" target="_blank" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Postulate</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </header>
    <!-- Header Section End -->
<!-- Hero Area -->





	<!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Nuestros Servicios</h2>
          <span>Nuestros Servicios</span>
          <p class="section-subtitle">Somos un equipo joven de profesionales apasionados por los recursos humanos, que profesan y creen que las personas han sido, son y ser&aacute;n siempre el motor de toda empresa.
Que comprenden las necesidades de empresas Pyme, Start-Up o Multinacional. Para ello te ofrecemos &oacute;ptimos resultados en selecci&oacute;n de personal, consultor&iacute;a y capacitaci&oacute;n.
Con nuestros servicios a medida, te brindamos soluciones dise&ntilde;ando un plan de acci&oacute;n acompañado de forma personalizada.
Adem&aacute;s con nuestro cursos de capacitaci&oacute;n te compartimos nuestra experiencia y conocimiento a trav&eacute;s de charlas, cursos, workshop y talleres, para que puedas adquirir nuevas habilidades y herramientas competitivas.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-search"></i>
              </div>
              <h4>B&uacute;squeda y selecci&oacute;n de personal.</h4>
              <p>Nos especializamos en la b&uacute;squeda de personal de tecnolog&iacute;a.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-direction-alt"></i>
              </div>
              <h4>Consultoría y asesoramiento.</h4>
              <p>Deje que nuestro equipo se encargue de todo el proceso.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>Capacitaci&oacute;n y desarrollo.</h4>
              <p>Capacitaciones te&oacute;rico-pr&aacute;cticas, con material propio.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section class="call-action section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <h3>Estás listo para comenzar?</h3>
              <p>Trabajemos juntos.<br> Llamanos para entender tus necesidades y ver c&oacute;mo podemos ayudarte</p>
              <a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank" class="btn btn-common btn-effect">Contactanos!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Por qu&eacute; elegirnos</h2>
          <span>Por qu&eacute;</span>
          <p class="section-subtitle">Soluciones adecuadas, necesitan los servicios apropiados</p>
        </div>


        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-rocket"></i></div>
                <h4>MISI&Oacute;N</h4>
                <p>Aportar valor y contribuir en mejorar la gesti&oacute;n de las organizaciones, convirti&eacute;ndonos en su aliado estrat&eacute;gico en el desarrollo de su negocio y conect&aacute;ndolas con los mejores talentos para cumplir sus objetivos.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-briefcase"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-briefcase"></i></div>
                <h4>VISI&Oacute;N</h4>
                <p>Convertirnos en referentes, ser destacados y reconocidos como una organizaci&oacute;n eficiente desarrollando todos nuestros procesos y servicios con altos est&aacute;ndares de calidad en la soluci&oacute;n de todas las necesidades de RRHH con Compromiso, Respeto, Integridad y Valores.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-tab"></i></div>
                <h4>VALORES</h4>
                <p>Innovaci&oacute;n / Trabajo en equipo / Calidad / Compromiso </p>
              </div>
            </div>
          </div>
          <!-- End featured -->


        </div>
      </div>
    </section>
    <!-- Features Section End -->

    <!-- Start Video promo Section -->
  <section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <iframe width="75%"	 height="450px" src="https://www.youtube.com/embed/uQ8W_Zpm1Zg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Presentaci&oacute;n</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Son s&oacute;lo dos minutos</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Nuestros Cursos</h2>
          <span>Cursos</span>
          <!-- <p class="section-subtitle">Seleccione la categoría.</p> -->
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common btn-effect" data-filter=".development">
                Selección IT
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".development">
                Estrategia de Empleo
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".mix">
                Reclutamiento
              </a>
			  
			  <a class="filter btn btn-common btn-effect" data-filter=".cont">
                Contabilidad
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-1.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-1.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-2.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-2.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-3.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-3.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


    <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-4.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-4.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-5.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-5.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-6.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-6.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Nuevas fotos -->
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-20.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-20.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-21.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-21.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-22.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-22.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-23.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-23.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-24.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-24.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-2.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-2.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- FIN DE FOTOS NUEVAS -->

        <div class="col-lg-4 col-md-6 col-xs-12 mix print development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-7.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-7.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix print development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-11.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-11.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-12.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-12.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 mix development  print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-13.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-13.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 col-xs-12 mix development  print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-14.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-14.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

		  
	<div class="col-lg-4 col-md-6 col-xs-12 mix  cont">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-27.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-27.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  	<div class="col-lg-12 col-md-12 col-xs-12 development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-28.png" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-28.png"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>




      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->


    <!-- Start Video promo Section -->
  <section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <iframe width="75%"	 height="450px" src="https://www.youtube.com/embed/0_tgRVuf9Ro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Testimonial</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Un alumno agradecido</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Counter Section Start -->
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
               <i class="lni-check-mark-circle"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">100</span>%</h3>
                <h4>Confiable</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-coffee-cup"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">700</span></h3>
                <h4>Tazas de Caf&eacute;</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-user"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">25</span>+</h3>
                <h4>Selectores Entrenados</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1689</span></h3>
                <h4>Personas nos siguen</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">

			 <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img6.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Victoria Rios Ochoa</a></h2>
                      <span>HR Analyst Administrative en Bizit Global</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Excelente profesional quien dict&oacute; el workshop de Estrategias para el efectivo reclutamiento de perfiles IT, adem&aacute;s el desarrollo fue din&aacute;mico y el contenido sumamente claro e interesante. ¡¡ Lo recomiendo !!</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>



              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img2.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Analia Alvarez</a></h2>
                      <span>HR & Administrative Coordinator en Taller Technologies</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Recomiendo a STCHR porque sus miembros son profesionales de RR. HH. cuyo valor agregado est&aacute; en el trato hacia las personas. Como docentes han sido incre&iacute;bles. Gracias chicas! </p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Maria Eugenia Garcia</a></h2>
                      <span>IT Recruiter at Zero to One Search</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Las chicas son muy profesionales. En mi caso me capacitaron para ser reclutadora IT y la verdad que aprend&iacute; un mont&oacute;n y me sirvi&oacute; muchisimo. Fueron claras, muy generosas en compartir su conocimiento y siempre dispuestas a ayudar.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img3.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Bel&eacute;n Casalotti</a></h2>
                      <span>IT Recruiter + Licenciada en Psicolog&iacute;a+ Analista de Selecci&oacute;n y Desarrollo en Vanesa Duran S.A</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Excelentes profesionales y capacitadoras. Cordiales, calidas y preparadas en el rubro IT. Un placer trabajar con ellas.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>

			<div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img4.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Yadia Judith Medina Cisterna</a></h2>
                      <span>T&eacute;cnico Superior en administraci&oacute;n de recursos humanos</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Muy lindo! Muy explicativo... Lo recomiendo, es &uacute;til para cualquier persona que quiera sumergirse en el tema de selecci&oacute;n y estrategias IT 😊 gracias por todo! 😊.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>

			  	<div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img5.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Lic. Karina Frossasco</a></h2>
                      <span>Selecci&oacute;n y Reclutamiento IT en KF Recursos Humanos </span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Excelente Consultora tanto en selecci&oacute;n y reclutamiento IT como formadora en estos perfiles! Muy buena la docente. La recomiendo.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>

			   <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img7.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Vanesa Lizarraga</a></h2>
                      <span>Administrativo en PRETORIAN SECURITY</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Excelente el Workshop organizado, para quienes estamos comenzando y buscamos aprender de que se trata el rubro ¡fue de mucha ayuda! Se nota la experiencia de la profesional a cargo! 😊</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>


			   <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img8.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Betsabe Del Rosario Jimenez</a></h2>
                      <span>T&eacute;cnica Superior en Gesti&oacute;n de Recursos Humanos</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Excelente Capacitaci&oacute;n Workshop Estrategias para el Efectivo Reclutamiento de Perfiles. Muy dedicada y profesional a los temas. Gracias por brindarme herramientas para seguir aprendiendo.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>


			   <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img9.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Bel&eacute;n Morteira</a></h2>
                      <span>Recruitment Analyst IT en Sooft Technology Company</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Recomiendo a esta consultora. Las profesoras son muy profesionales y accesibles a la hora de ayudar y transmitir nuevos conocimientos.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>


			   <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img10.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Carlos Carranza Casas</a></h2>
                      <span>IT recruiter /Pasante en formaci&oacute;n y desarrollo en Lafarge Holcim</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Muy interesante el curso de selecci&oacute;n it!! sigan as&iacute;.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>




            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->


    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">El Equipo</h2>
          <span>Equipo</span>
          <p class="section-subtitle">Conoce a nuestro equipo.</p>
        </div>
        <div class="row">

		 	   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team1.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Romina C&oacute;rdoba</h4>
                  <p>Directora</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr" target="_blank"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/romina-cordoba/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

         <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team2.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Octabrina Gonz&aacute;lez</h4>
                  <p>Community Manager</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/octabrina-gonzalez-15478b14b/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
		  
		  
		   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team6.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Mauricio S&aacute;nchez</h4>
                  <p>Instructor/Consultor Selecci&oacute;n IT Avanzado. Full-stack Java Dev</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/maurisandev/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team8.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Mat&iacute;as Gutierrez</h4>
                  <p>Instructor Desarollo Web Frontend. Full-stack Java Dev</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/matias-gutierrez-27822797/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team5.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Susana Bechara</h4>
                  <p>Instructora Selección IT. Headhunter</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/susanabechara/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>               
            </div>
          </div>
		  
		   <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team7.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Anthony Trillo</h4>
                  <p>Instructor Selección IT Avanzado. Full-stack PHP Dev</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="linkedin.com/in/anthonytrillo/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team3.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Alicia Caballero</h4>
                  <p>Administraci&oacute;n</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr" target="_blank"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/matias-zalazar-71152565/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

		          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team4.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Leo Prada</h4>
                  <p>IT</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/leandroprada" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr" target="_blank"><i class="lni-twitter-filled"></i></a></li>
                     <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/leandroprada/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Team section End -->



    <!-- Clients Section -->
    <div id="clients" class="section">
      <!-- Container Ends -->
      <div class="container">
        <!-- Row and Scroller Wrapper Starts -->
        <div class="row" id="clients-scroller">
          <div class="client-item-wrapper">
            <img src="img/clients/img13.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img14.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img1.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img6.png" alt="">
          </div>
		    <div class="client-item-wrapper">
            <img src="img/clients/img12.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img9.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img3.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img8.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img4.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img5.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img11.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img2.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img10.png" alt="">
          </div>
		  

        </div>
      </div>
    </div>
    <!-- Client Section End -->


    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91630.53599820855!2d-64.21294248578134!3d-31.407508432530577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94329880501df691%3A0x2741a0576f18ac4e!2s27+de+Abril+980%2C+X5000AET+C%C3%B3rdoba!5e0!3m2!1sen!2sar!4v1558527384419!5m2!1sen!2sar"></object>
		 </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content" id="contactenos">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>STC HR</h3>
              <div class="textwidget">
                <p>Si sentis que te podemos
				ayudar, con nuestra dedicacion
				y esfuerzo continuo.
				Contactanos!!!</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="linkedin" href="https://www.linkedin.com/in/infostchr/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Links</h3>
                <ul class="menu">
                  <li><a href="#">Servicios</a></li>
                  <li><a href="#">Cursos</a></li>
                  <li><a href="#">El Equipo</a></li>

                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Cont&aacute;ctenos</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Direcci&oacute;n :</strong> <span>27 DE ABRIL 980 - Córdoba, Argentina</span>
                  </li>
                  <li>
                    <strong>Tel :</strong> <span>+54 351 703-2303</span>
                  </li>
                  <li>
                    <strong>Messenger: </strong> <span><a href="
https://m.me/675557912900923?fbclid=IwAR3K4zKfHN9gEyLQQM1LJmiYmoS3tJinl8l6jKUYfvweFwigp3qXwWRouVE" target="_blank"> STC HR </a></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Instagram</h3>
                <ul class="instagram-footer">
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta1.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta2.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta3.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta4.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta5.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/infostchr/?hl=es-la" target="_blank"><img src="img/instagram/insta6.jpg" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

	 </footer>
      <!-- Footer area End -->

	  <!-- Start Google Form -->
	<div class="container">
          <div class="row">
				<div class="col-md-12 center">
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdWEO7QWY_Zu9OjYYkGfzjlsOc4pMksq-xqXrSwHPhSBsd-5w/viewform?embedded=true" width="100%" height="1155" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
				</div>
		   </div>
	</div>

	  <!-- End Google Form -->


      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
              </div>
              <div class="float-right">
                <ul class="nav nav-inline">
                  <li class="nav-item">
                    <a class="nav-link active" href="https://www.leandroprada.website" target="_blank">Modified by Leo Prada</a>
                  </li>
                                   <li class="nav-item">
                    <a class="nav-link" href="mailto:leandroprada@gmail.com" target="_blank">Contacto</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->


    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <!-- <script src="js/color-switcher.js"></script> -->
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

	<!-- Default Statcounter code for STC
https://www.stchr.info/ -->
<script type="text/javascript">
var sc_project=12014019;
var sc_invisible=1;
var sc_security="7cbeb1dc";
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/12014019/0/7cbeb1dc/1/"
alt="Web Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->


<!-- Código de instalación Cliengo para www.stchr.info --> <script type="text/javascript">(function () { var ldk = document.createElement("script"); ldk.type = "text/javascript"; ldk.async = true; ldk.src = "https://s.cliengo.com/weboptimizer/5d319dc5e4b00b6a43d0ed8c/5d319dc6e4b00b6a43d0ed8f.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ldk, s); })();</script>

  </body>
</html>