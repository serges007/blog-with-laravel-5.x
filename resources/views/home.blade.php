@extends('layouts.layout')

@section('content')
    <!--
    Start About Section
    ==================================== -->
    <section id="about" class="bg-one">
        <div class="container">
            <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
                            <h2>About <span class="color">Us</span></h2>
                            <div class="border"></div>
                    </div>
                    <!-- /section title -->

                    <!-- About item -->
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
                            <div class="wrap-about">							
                                    <div class="icon-box">
                                            <i class="fa fa-lightbulb-o fa-4x"></i>
                                    </div>					
                                    <!-- Express About Yourself -->
                                    <div class="about-content text-center">
                                            <h3 class="ddd">We're Creative</h3>								
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                                    </div>
                            </div>
                    </div> 
                    <!-- End About item -->

                    <!-- About item -->
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                            <div class="wrap-about">
                                    <div class="icon-box">
                                            <i class="fa fa-users fa-4x"></i>
                                    </div>
                                    <!-- Express About Yourself -->
                                    <div class="about-content text-center">
                                            <h3>We're Professional</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                                    </div>
                            </div>
                    </div> 
                    <!-- End About item -->

                    <!-- About item -->					
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                            <div class="wrap-about kill-margin-bottom">
                                    <div class="icon-box">
                                            <i class="fa fa-users fa-4x"></i>
                                    </div>
                                    <!-- Express About Yourself -->
                                    <div class="about-content text-center">
                                            <h3>We're Professional</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                                    </div>
                            </div>
                    </div> 
                    <!-- End About item -->

            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->


    <!--
    Start Counter Section
    ==================================== -->

    <section id="counter" class="parallax-section">
            <div class="container">
                    <div class="row">
                            <!-- section title -->
                            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                                    <h2>Our <span class="color">Partners and Clients</span></h2>
                                    <div class="border"></div>
                            </div>
                            <!-- /section title -->
                            <!-- first count item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                                <img src="img/partners/partner1.png" />
                            </div>
                            <!-- end first count item -->

                            <!-- second count item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                                <img src="img/partners/partner2.png" />
                            </div>
                            <!-- end second count item -->

                            <!-- third count item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                                <img src="img/partners/partner3.png" />
                            </div>
                            <!-- end third count item -->

                            <!-- fourth count item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="img/partners/partner4.png" />
                            </div>
                            <!-- end fourth count item -->

                    </div> 		<!-- end row -->
            </div>   	<!-- end container -->
    </section>   <!-- end section -->


    <!-- Start Services Section
    ==================================== -->

    <section id="services" class="bg-one">
            <div class="container">
                    <div class="row">

                            <!-- section title -->
                            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                                    <h2>Our <span class="color">Services</span></h2>
                                    <div class="border"></div>
                            </div>
                            <!-- /section title -->

        <!-- Single Service Item -->
                            <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                                    <div class="service-block text-center">
                                            <div class="service-icon text-center">
                                                    <i class="fa fa-wordpress fa-5x"></i>
                                            </div>
                                            <h3>WordPress Theme</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                                    </div>
                            </article>
        <!-- End Single Service Item -->

        <!-- Single Service Item -->
                            <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                                    <div class="service-block text-center">
                                            <div class="service-icon text-center">
                                                    <i class="fa fa-desktop fa-5x"></i>
                                            </div>
                                            <h3>Responsive Design</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                                    </div>
                            </article>
        <!-- End Single Service Item -->

        <!-- Single Service Item -->
                            <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                                    <div class="service-block text-center">
                                            <div class="service-icon text-center">
                                                    <i class="fa fa-play fa-5x"></i>
                                            </div>
                                            <h3>Media &amp; Advertisement</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                                    </div>
                            </article>
                            <!-- End Single Service Item -->

                            <!-- Single Service Item -->
                            <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                                    <div class="service-block text-center">
                                            <div class="service-icon text-center">
                                                    <i class="fa fa-eye fa-5x"></i>
                                            </div>
                                            <h3>Graphic Design</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                                    </div>
                            </article>
                            <!-- End Single Service Item -->

                            <!-- Single Service Item -->
                            <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                                    <div class="service-block text-center">
                                            <div class="service-icon text-center">
                                                    <i class="fa fa-android fa-5x"></i>
                                            </div>
                                            <h3>Apps Development</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                                    </div>
                            </article>
                            <!-- End Single Service Item -->

                            <!-- Single Service Item -->
                            <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                    <div class="service-block text-center kill-margin-bottom">
                                            <div class="service-icon text-center">
                                                    <i class="fa fa-link fa-5x"></i>
                                            </div>
                                            <h3>Networking</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                                    </div>
                            </article>
                            <!-- End Single Service Item -->

                    </div> 		<!-- End row -->
            </div>   	<!-- End container -->
    </section>   <!-- End section -->

    <!-- Start Twitter Feed
    =========================================== -->

    <section id="twitter-feed" class="parallax-section">
            <div class="container">
                    <div class="row">
                            <div class="col-lg-12 text-center">

                                    <!-- twitter bird -->
                                    <div class="twitter-bird wow fadeInDown" data-wow-duration="500ms">
                                            <span>
                                                    <i class="fa fa-twitter fa-4x"></i>
                                            </span>
                                    </div>
                                    <!-- /twitter bird -->

                                    <!-- fetching tweet -->
                                    <div class="tweet wow fadeIn" data-wow-duration="2000ms"></div>
                                    <!-- /fetching tweet -->

                                    <!-- follow us button -->
                                    <a href="https://twitter.com/amimorshed" title="Follow Us" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Follow Us</a>						
                                    <!-- /follow us button -->

                            </div>
                    </div>       <!-- End row -->
            </div>   	<!-- End container -->
    </section>   <!-- End section -->
    
    <!--
    Start Blog Section
    =========================================== -->

    <section id="blog" class="bg-one">
            <div class="container">
                    <div class="row">

                            <!-- section title -->
                            <div class="title text-center wow fadeInDown">
                                    <h2> Latest <span class="color">Posts</span></h2>
                                    <div class="border"></div>
                            </div>
                            <!-- /section title -->

                            <div class="clearfix">
                                <!-- single blog post -->
                                @if($articles)    
                                    <div class="row">
                                            @foreach($articles as $article)
                                                <div >
                                                    @include('blog.partials.item')
                                                </div>           
                                            @endforeach
                                    </div>                            
                                @else
                                    <p>No articles</p>
                                @endif 
                                <!-- /single blog post -->
                            </div>

                            <div class="all-post text-center">
                                    <a class="btn btn-transparent" href="{{ url('/blog') }}">View All Post</a>
                            </div>

                    </div> <!-- end row -->
            </div> <!-- end container -->
    </section> <!-- end section -->

    <!-- Start Testimonial
    =========================================== -->

    <section id="testimonial" class="parallax-section">
            <div class="container">
                    <div class="row">				
                            <div class="col-lg-12">

                                    <!-- section title -->
                                    <div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
                                            <h3>What People Say About Us</h3>
                                    </div>
                                    <!-- /section title -->

                                    <!-- testimonial wrapper -->
                                    <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

                                            <!-- testimonial single -->
                                            <div class="item text-center">

                                                    <!-- client photo -->
                                                    <div class="client-thumb">
                                                            <img src="img/team/client.jpg" class="img-responsive" alt="Meghna">
                                                    </div>
                                                    <!-- /client photo -->

                                                    <!-- client info -->
                                                    <div class="client-info">
                                                            <div class="client-meta">
                                                                    <h3>Abul Mal Muhit</h3>
                                                                    <span>Dec 26, 2014</span>
                                                            </div>
                                                            <div class="client-comment">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
                                                                    <ul class="social-profile">
                                                                            <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <!-- /client info -->
                                            </div>
                                            <!-- /testimonial single -->

                                            <!-- testimonial single -->
                                            <div class="item text-center">

                                                    <!-- client photo -->
                                                    <div class="client-thumb">
                                                            <img src="img/team/client.jpg" class="img-responsive" alt="Meghna">
                                                    </div>
                                                    <!-- /client photo -->

                                                    <!-- client info -->
                                                    <div class="client-info">
                                                            <div class="client-meta">
                                                                    <h3>Abul Mal Muhit</h3>
                                                                    <span>Dec 26, 2014</span>
                                                            </div>
                                                            <div class="client-comment">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
                                                                    <ul class="social-profile">
                                                                            <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <!-- /client info -->
                                            </div>
                                            <!-- /testimonial single -->

                                            <!-- testimonial single -->
                                            <div class="item text-center">

                                                    <!-- client photo -->
                                                    <div class="client-thumb">
                                                            <img src="img/team/client.jpg" class="img-responsive" alt="Meghna">
                                                    </div>
                                                    <!-- /client photo -->

                                                    <!-- client info -->
                                                    <div class="client-info">
                                                            <div class="client-meta">
                                                                    <h3>Abul Mal Muhit</h3>
                                                                    <span>Dec 26, 2014</span>
                                                            </div>
                                                            <div class="client-comment">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
                                                                    <ul class="social-profile">
                                                                            <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <!-- /client info -->
                                            </div>
                                            <!-- /testimonial single -->

                                    </div>		<!-- end testimonial wrapper -->
                            </div> 		<!-- end col lg 12 -->
                    </div>	    <!-- End row -->
            </div>       <!-- End container -->
    </section>    <!-- End Section -->

    
    
    <!-- Srart Contact Us
    =========================================== -->		
    <section id="contact-us">
            <div class="container">
                    <div class="row">

                            <!-- section title -->
                            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                                    <h2>Get In <span class="color">Touch</span></h2>
                                    <div class="border"></div>
                            </div>
                            <!-- /section title -->

                            <!-- Contact Details -->
                            <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                                    <h3>Contact Details</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                                    <div class="contact-details">
                                            <div class="con-info clearfix">
                                                    <i class="fa fa-home fa-lg"></i>
                                                    <span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
                                            </div>

                                            <div class="con-info clearfix">
                                                    <i class="fa fa-phone fa-lg"></i>
                                                    <span>Phone: +880-31-000-000</span>
                                            </div>

                                            <div class="con-info clearfix">
                                                    <i class="fa fa-fax fa-lg"></i>
                                                    <span>Fax: +880-31-000-000</span>
                                            </div>

                                            <div class="con-info clearfix">
                                                    <i class="fa fa-envelope fa-lg"></i>
                                                    <span>Email: hello@meghna.com</span>
                                            </div>
                                    </div>
                            </div>
                            <!-- / End Contact Details -->

                            <!-- Contact Form -->
                            <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <form id="contact-form" method="post" action="sendmail.php" role="form">

                                            <div class="form-group">
                                                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                            </div>

                                            <div class="form-group">
                                                    <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                                            </div>

                                            <div class="form-group">
                                                    <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                            </div>

                                            <div class="form-group">
                                                    <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
                                            </div>

                                            <div id="mail-success" class="success">
                                                    Thank you. The Mailman is on His Way :)
                                            </div>

                                            <div id="mail-fail" class="error">
                                                    Sorry, don't know what happened. Try later :(
                                            </div>

                                            <div id="cf-submit">
                                                    <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                                            </div>						

                                    </form>
                            </div>
                            <!-- ./End Contact Form -->

                    </div> <!-- end row -->
            </div> <!-- end container -->

            <!-- Google Map -->
            <div class="google-map wow fadeInDown" data-wow-duration="500ms">
                    <div id="map-canvas"></div>
<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15922.272491589489!2d11.553225699999999!3d3.90229875!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2scm!4v1503031201329" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                    -->
            </div>	
            <!-- /Google Map -->

    </section> <!-- end section -->
@endsection
