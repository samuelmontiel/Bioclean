
<html lang="en">
<head>
  <base href="<?php echo base_url();?>">
	<meta charset="UTF-8">
	<title>BIOCLEAN</title>
	<meta name="description" content="Heera HTML5 Template by Jewel Theme" >
	<meta name="author" content="Jewel Theme">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<!-- Bootstrap  -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- icon fonts font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Import Magnific Pop Up Styles -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Import Custom Styles -->
	<link href="css/style.css" rel="stylesheet">
	<!-- Import Animate Styles -->
	<link href="css/animate.min.css" rel="stylesheet">
	<!-- Import owl.carousel Styles -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Import Custom Responsive Styles -->
	<link href="css/responsive.css" rel="stylesheet">
  <!-- Include modernizr-2.8.3.min.js -->

  <script src="js/jquery.js"></script>
    <script>

 $(document).ready(function() {

  /* -------- One page Navigation ----------*/
  $('#main-menu #menu').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 1500,
    scrollThreshold: 0.5,
    scrollOffset: 95,
    filter: ':not(.sub-menu a, .not-in-home)',
    easing: 'swing'
  });
  }); 
</script>
  <script src="js/modernizr-2.8.3.min.js"></script>
  
  <!-- Include magnific-popup.min.js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Gmap3.js For Static Maps -->
  <script src="js/gmap3.js"></script>
  <!-- Javascript Plugins  -->
  <script src="js/plugins.js"></script>
  <!-- Custom Functions  -->
  <script src="js/functions.js"></script>
  <script src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
 
  <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>


	
	<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<![endif]-->

  	</head>
  	<body class="header-fixed-top">

  		<div id="page-top" class="page-top"></div><!-- /.page-top -->

  		<section id="top-contact" class="top-contact">
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-8 pull-left">
  						<ul class="contact-list">
  							<li>
  								<a class="site-name" href="#">
  									<span class="top-icon"><i class="fa fa-link"></i></span>
  									www.sitename.com
  								</a>
  							</li>
  							<li>
  								<a class="info" href="#">
  									<span class="top-icon"><i class="fa fa-envelope"></i></span>
  									info@sitename.com
  								</a>
  							</li>
  							<li>
  								<a class="phone-no" href="#">
  									<span class="top-icon"><i class="fa fa-phone"></i></span>
  									8888 888888
  								</a>
  							</li>
  						</ul>
  					</div>

  					<div class="col-sm-4 pull-right">
  						<div class="top-social">
  							<ul>
  								<li>
  									<a href="#" class="top-icon fa fa-facebook"></a>
  								</li>
  								<li>
  									<a href="#" class="top-icon fa fa-twitter"></a>
  								</li>
  								<li>
  									<a href="#" class="top-icon fa fa-linkedin"></a>
  								</li>
  							</ul>
  						</div>
  					</div>
  				</div><!-- /.row -->
  			</div><!-- /.container -->
  		</section><!-- /#top-contact -->



  		<section id="site-banner" class="site-banner text-center">
  			<div class="container">
  				<div class="site-logo">
  					<a href="./"><img src="img/logo.png" alt="Site Logo"></a>
  				</div><!-- /.site-logo -->
  			</div><!-- /.container -->
  		</section><!-- /#site-banner -->



  		<header id="main-menu" class="main-menu">
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-7">
  						<div class="navbar-header">
  							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
  								<i class="fa fa-bars"></i>
  							</button>
                <div class="menu-logo">
                  <a href="./"><img src="img/logo.png" alt="menu Logo"></a>
                </div><!-- /.menu-logo -->
              </div>
              <nav id="menu" class="menu collapse navbar-collapse">
               <ul id="headernavigation" class="menu-list nav navbar-nav">
                <li class="active"><a href="#page-top">Inicio</a></li>
                <li><a href="#Empresa">Empresa</a></li>
                <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catalogo de Productos
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('principal/productosHogar');?>">Hogar</a></li>
            <li><a href="#">Cuerpo</a></li>
            <li><a href="#">Auto</a></li> 
            <li><a href="#">Instituciones</a></li> 
            <li><a href="#">Limpieza</a></li> 
          </ul>
        </li>
                <li><a href="#Sucursales">Sucursales</a></li>
                <li><a href="#Contact">Contacto</a></li>
              </ul><!-- /.menu-list -->
            </nav><!-- /.menu-list -->
          </div>

          <div class="col-sm-5">
            <div class="menu-search pull-right">
             <form role="search" class="search-form" action="#" method="get">
              <input class="search-field" type="text" name="s" id="s" placeholder="Search Here" required>
              <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
            </form><!-- /.search-form -->
          </div><!-- /.menu-search -->
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /#main-menu -->
  <br>



  <section id="main-slider">
      <div class="container">
        
          <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <center >
            <div class="carousel-inner" role="listbox" >
              <div class="item active">
                <img src="img/slider/01.jpg" >
              </div>

              <div class="item">
                <img src="img/slider/02.jpg" >
              </div>

              <div class="item">
                <img src="img/slider/03.jpg" >
              </div>

              <div class="item">
                <img src="img/slider/04.jpg" >
              </div>
            </div>
            </center>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>
  </div>
  </section><!-- /#main-slider -->
  <section id="Empresa" class="about">
    
      <div class="about-area">
              <div class="title-area text-center">
                <h2 class="about-title">BIOCLEAN</h2>
              </div><!-- /.title-area -->
                <div class="about-items">
                    <div class="col-sm-3">
                       
                    </div>
                 <div class="col-sm-6">
                     <div class="item">
                      <div class="item-top">
                       <h3 class="item-title">CONCEPTO</h3>
                     </div><!-- /.item-top -->
                     <p class="item-description">
                       En BioClean encontrará las mejores líneas de productos de limpieza, jarciería y todos sus derivados, para su empleo en el hogar, la oficina o el negocio.

                      Todas nuestras líneas de productos químicos de limpieza son elaboradas con ingredientes especiales y certificados por laboratorio, lo que nos permite obtener los mejores resultados para la higiene de sus espacios interiores o exteriores. Nuestros productos son capaces de eliminar bacterias generadas por la humedad y suciedad en todo tipo de artículos, muebles y superficies sin dañarlas.

                      Somos una empresa innovadora en el mercado colimense, por lo que ponemos a su disposición excelentes precios en todos sus pedidos de productos de limpieza al mayoreo y menudeo.

                      Contamos con Sucursal en Colima, Colima, para brindar un mejor servicio a todos nuestros clientes.

                      Comuníquese con nuestros representantes a través de los teléfonos publicados en este espacio para recibir más información.

                      ¡No busque más y compruebe que en BioClean somos su mejor opción!
                     </p>

                   </div><!-- /.item -->
                </div>
                <div class="col-sm-3">
                       
                </div>

            </div><!-- /.about-items -->
      </div><!-- /.about-area -->
    

    
  </section>
  <br>
  <section id="Catalogo">
    
  </section>
  <br><br><br><br>

  
  <section id="Sucursales">
      <div class="container"> 
          <div class="row">
              <!-- CAMINO REAL -->
                <div class="col-md-12">
                    <div class="container">
                        <div class="row flat">
                          <div class="row">
                                <!-- Map Column -->
                                <div class="col-md-8">
                                    <div class="heading text-center"> 
                                     <h2>Sucursal Camino Real</h2>
                                    </div>
                                    <!-- Embedded Google Map -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.848171258944!2d-103.71273758501596!3d19.245447651625252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255aa3934fe889%3A0xcdeaa268dfc53c1a!2sBlvrd+Camino+Real+93%2C+Jardines+de+las+Lomas%2C+28014+Colima%2C+Col.!5e0!3m2!1ses-419!2smx!4v1450284279497" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <!-- Contact Details Column -->
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <h3>Direccion </h3>
                                    <p>
                                        Boulevard Camino Real 93<br>Jardines de las Lomas, 28014 Colima, Col<br>
                                    </p>
                                    <p><i class="fa fa-phone"></i> 
                                        <abbr title="Phone">P</abbr>: (312)119-65-22</p>
                                    <p><i class="fa fa-envelope-o"></i> 
                                        <abbr title="Email">E</abbr>: <a href="jags.uag@hotmail.com">jags.uag@hotmail.com</a>
                                    </p>
                                    <p><i class="fa fa-envelope-o"></i> 
                                        <abbr title="Email">E</abbr>: <a href="nolazco0410@yahoo.com.mx">nolazco0410@yahoo.com.mx</a>
                                    </p>
                                    
                                    <p><i class="fa fa-clock-o"></i> 
                                        <abbr title="Hours">H</abbr>: Viernes de 17:00 a 22:00 </p>
                                    <p><i class="fa fa-clock-o"></i> 
                                        <abbr title="Hours">H</abbr>: Sábado de 8:00 a 13:00</p>
                                    <ul class="list-unstyled list-inline list-social-icons">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                        </li>
                                    </ul>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
                
                <!-- BENITO JUAREZ -->
                <div class="col-md-12">
                    <div class="container">
                        <div class="row flat">
                          <div class="row">
                                <!-- Map Column -->
                                <div class="col-md-8">
                                    <div class="heading text-center"> 
                                     <h2>Sucursal Benito Juárez<h2>
                                    </div>
                                    <!-- Embedded Google Map -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.848171258944!2d-103.71273758501596!3d19.245447651625252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255aa3934fe889%3A0xcdeaa268dfc53c1a!2sBlvrd+Camino+Real+93%2C+Jardines+de+las+Lomas%2C+28014+Colima%2C+Col.!5e0!3m2!1ses-419!2smx!4v1450284279497" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <!-- Contact Details Column -->
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <h3>Direccion </h3>
                                    <p>
                                        Boulevard Camino Real 93<br>Jardines de las Lomas, 28014 Colima, Col<br>
                                    </p>
                                    <p><i class="fa fa-phone"></i> 
                                        <abbr title="Phone">P</abbr>: (312)119-65-22</p>
                                    <p><i class="fa fa-envelope-o"></i> 
                                        <abbr title="Email">E</abbr>: <a href="jags.uag@hotmail.com">jags.uag@hotmail.com</a>
                                    </p>
                                    <p><i class="fa fa-envelope-o"></i> 
                                        <abbr title="Email">E</abbr>: <a href="nolazco0410@yahoo.com.mx">nolazco0410@yahoo.com.mx</a>
                                    </p>
                                    
                                    <p><i class="fa fa-clock-o"></i> 
                                        <abbr title="Hours">H</abbr>: Viernes de 17:00 a 22:00 </p>
                                    <p><i class="fa fa-clock-o"></i> 
                                        <abbr title="Hours">H</abbr>: Sábado de 8:00 a 13:00</p>
                                    <ul class="list-unstyled list-inline list-social-icons">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                        </li>
                                    </ul>
                                </div>
                          </div>
                        </div>
                    </div>
                </div> 
          </div>
      </div>
        
  </section>
  <br>

  <section id="Contact" class="contact">
  <div class="about-area">
      <div id="message-details" class="message-details">
      <div class="container">
        <form action="email.php" method="post" id="myForm" class="message-form">
          <div class="row">
            <div class="col-sm-6">
              <input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name*" title="Name" required>
              <input id="email" class="form-control" name="email" type="email" value="" size="30" aria-required="true" placeholder="Email*" title="Email"  required>
              <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Subject*" title="Subject"  required>
            </div>
            <div class="col-sm-6">
              <textarea id="message" class="form-control" name="message" cols="45" rows="3" aria-required="true" placeholder="Message" title="Message"  required></textarea>
              <button name="submit" class="btn btn-lg full-width" type="submit" id="submit">Submit</button>
            </div>
          </div><!-- /.row -->
        </form><!-- /#commentform -->
      </div><!-- /.container -->
    </div><!-- /.message-details -->
    </div>

  </section>
  <br><br><br>


<footer>
  <div id="footer-top" class="footer-top">
    <div class="container">
      <div class="row">
        <div id="tweet" class="tweet text-left">
          <div class="col-xs-4 about-tweet">
            <span class="tweet-icon"><i class="fa fa-twitter"></i></span>
            <span class="tweet-author">John Doe</span>
            <p class="tweet-details">
              Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis eupulvinar nuncint
            </p><!-- /.tweet-details -->
            <time datetime="PT2H">2 Hours Ago</time>
          </div>
          <div class="col-xs-4 about-tweet">
            <span class="tweet-icon"><i class="fa fa-twitter"></i></span>
            <span class="tweet-author">John Doe</span>
            <p class="tweet-details">
              Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis eupulvinar nuncint
            </p><!-- /.tweet-details -->
            <time datetime="PT2H">2 Hours Ago</time>
          </div>
          <div class="col-xs-4 about-tweet">
            <span class="tweet-icon"><i class="fa fa-twitter"></i></span>
            <span class="tweet-author">John Doe</span>
            <p class="tweet-details">
              Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis eupulvinar nuncint
            </p><!-- /.tweet-details -->
            <time datetime="PT2H">2 Hours Ago</time>
          </div>
        </div><!-- /#tweet -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /#footer-top -->

  <div id="footer-bottom" class="footer-bottom text-center">
    <div class="container">
      <div id="copyright" class="copyright">
        <a href="http://syscaja.com/">Copyright © 2015 HITEC.</a>  2015 - Designed &amp; Developed by <a href="http://jeweltheme.com">Jewel Theme</a>
      </div><!-- /#copyright -->
    </div>
  </div><!-- /#footer-bottom -->
</footer>
Copyright © 2015 HITEC. Todos los Derechos Reservados



<div id="scroll-to-top" class="scroll-to-top">
  <span>
    <i class="fa fa-chevron-up"></i>    
  </span>
</div><!-- /#scroll-to-top -->


</body>
</html>

