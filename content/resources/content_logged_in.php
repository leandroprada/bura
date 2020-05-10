<?php
 session_start();
 $userloggedname = $_SESSION['userloggedname'];
 
 ?>
 
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="keywords" content="Seleccion,Consultoria,Recursos,Humanos,Cordoba">
       <meta name="author" content="Grayrids">
    <title>STC - Contenido Exclusivo</title>
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
                <a class="nav-link page-scroll" href="./novedades.php">Novedades</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="./postulate.php">Postulate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contactenos">Contacto</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="./resources.php">Contenido Exclusivo</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="./login/logout.php">Logout</a>
              </li>
            </ul>
            </div>
        </div>

	  </nav>
	</header>





	<!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header"> 
          <h2 class="section-title">Hola <?php echo $userloggedname;?>!</h2>
          <span>Exclusivo</span>
          <p class="section-subtitle">En esta secci&oacute;n encontrar&aacute;s todo el contenido para nuestros subscriptores.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-search"></i>
              </div>
              <h4>Videos</h4>
              <p>Volve a ver alg&uacute;n curso que hayas tomado.</p>
            </div>
          </div>
         <!--  <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-direction-alt"></i>
              </div>
              <h4>Documentos de consulta.</h4>
              <p>Para leer cuando tenés alguna duda.</p>
            </div>
          </div> -->
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>Links &Uacute;tiles.</h4>
              <p>Debajo algunos de nuestro amigos.</p>
			  <ul>
				<li>
					<a href="https://www.leoprada.com.ar" target="_blank" class="">LAP desarrollo de sitios web.</a>
				</li>
				<li>
					<a href="https://www.duhire.com/" target="_blank" class="">DuHire App de Reclutamiento</a>
				</li>
				<li>
					<a href="https://www.empleosit.com.ar/" target="_blank" class="">EmpleosIT Ofertas de trabajo en Informática y Tecnología</a>
				</li>
			  </ul>	
			</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    
		
	
    <!-- Start Video promo Section -->

	<section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
		    
              <div class="video-promo-content text-center">
					<h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Curso Selecci&oacute;n IT Avanzado 09-MAY-2020</h2>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/c1YSfFaMve4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    

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
                  <h4 class="team-title">Ana Martin</h4>
                  <p>Redes Sociales</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/Infostchr-675557912900923/" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/infostchr"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="mailto:infostchr@gmail.com?subject=Contacto desde tu web: Consulta Búsquedas y Selección de Personal" target="_blank"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/ana-martin-baaa0a186/" target="_blank"><i class="lni-linkedin-fill"></i></a></li>
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
            <img src="img/clients/img1.png" alt="">
          </div>
		  <div class="client-item-wrapper">
            <img src="img/clients/img6.png" alt="">
          </div>
		    <div class="client-item-wrapper">
            <img src="img/clients/img11.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img9.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img3.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img4.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img5.png" alt="">
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