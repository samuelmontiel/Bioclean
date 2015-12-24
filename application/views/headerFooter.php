<!DOCTYPE html>
<html>
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