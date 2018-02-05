<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="AMSCorp plateform ">
        
        <meta name="author" content="Serge Mbele">
		
        <title>MyBlog</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.png')); ?>" />
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
		<!-- Animate.css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.css')); ?>">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/component.css')); ?>">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/slit-slider.css')); ?>">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
		<!-- Media Queries -->
        <link rel="stylesheet" href="<?php echo e(asset('css/media-queries.css')); ?>">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>


		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
	
    </head>
<body>
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">
                        <h1 id="logo">
                                <img src="img/favicon.png" alt="MyBlog" />
                        </h1>
                    </a>
		<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                        <?php if(Auth::check()): ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profil</a></li>
                                    <li><a href="#">Modifier mot de passe</a></li>
                                    <li><a href="#">Modifier profil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Admin</li>
                                    <li class="dropdown-header">Log Out</li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>   
                        <?php endif; ?>                        
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
	
        <?php echo $__env->yieldContent('content'); ?>
        <footer id="footer" class="bg-one">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="500ms">
                                <div class="col-lg-12">

                                        <!-- Footer Social Links -->
                                        <div class="social-icon">
                                                <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                        </div>
                                        <!--/. End Footer Social Links -->

                                        <!-- copyright -->
                                        <div class="copyright text-center">
                                                <a href="index.html">
                                                        <img src="img/logo-meghna.png" alt="Meghna" /> 
                                                </a>
                                                <br />

                                                <p><a href="http://www.amscorporations.com"> AMSCorp</a>. Copyright &copy; 2017. All Rights Reserved.</p>
                                        </div>
                                        <!-- /copyright -->

                                </div> <!-- end col lg 12 -->
                        </div> <!-- end row -->
                </div> <!-- end container -->
        </footer> <!-- end footer -->

        <!-- Back to Top
        ============================== -->
        <a href="javascript:;" id="scrollUp">
                <i class="fa fa-angle-up fa-2x"></i>
        </a>

        <!-- end Footer Area
        ========================================== -->        

        <!-- Main jQuery -->
        <script src="<?php echo e(asset('js/jquery-1.12.2.min.js')); ?>"></script>
        <!-- Bootstrap 3.1 -->
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <!-- Slitslider -->
        <script src="<?php echo e(asset('js/jquery.slitslider.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.ba-cond.min.js')); ?>"></script>
        <!-- Parallax -->
        <script src="<?php echo e(asset('js/jquery.parallax-1.1.3.js')); ?>"></script>
        <!-- Owl Carousel -->
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <!-- Portfolio Filtering -->
        <script src="<?php echo e(asset('js/jquery.mixitup.min.js')); ?>"></script>
        <!-- Custom Scrollbar -->
        <script src="<?php echo e(asset('js/jquery.nicescroll.min.js')); ?>"></script>
        <!-- Jappear js -->
        <script src="<?php echo e(asset('js/jquery.appear.js')); ?>"></script>
        <!-- Pie Chart -->
        <script src="<?php echo e(asset('js/easyPieChart.js')); ?>"></script>
        <!-- jQuery Easing -->
        <script src="<?php echo e(asset('js/jquery.easing-1.3.pack.js')); ?>"></script>
        <!-- tweetie.min -->
        <script src="<?php echo e(asset('js/tweetie.min.js')); ?>"></script>
        <!-- Google Map API -->
<!--        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
        <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
        <!-- Highlight menu item -->
        <script src="<?php echo e(asset('js/jquery.nav.js')); ?>"></script>
        <!-- Sticky Nav -->
        <script src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>
        <!-- Number Counter Script -->
        <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
        <!-- wow.min Script -->
        <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
        <!-- For video responsive -->
        <script src="<?php echo e(asset('js/jquery.fitvids.js')); ?>"></script>
        <!-- Grid js -->
        <script src="<?php echo e(asset('js/grid.js')); ?>"></script>
        <!-- Custom js -->
        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>        
    <!-- Scripts -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function initialiser() {
                    var latlng = new google.maps.LatLng(3.897499, 11.550035);
                    //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
                    //de définir des options d'affichage de notre carte
                    var options = {
                            center: latlng,
                            zoom: 19,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    //constructeur de la carte qui prend en paramêtre le conteneur HTML
                    //dans lequel la carte doit s'afficher et les options
                    var carte = new google.maps.Map(document.getElementById("map-canvas"), options);
            }
        </script>    
</body>
</html>
