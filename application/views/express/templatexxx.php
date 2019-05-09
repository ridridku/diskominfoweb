<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DISKOMINFOKAB</title>
	<!-- core CSS/ -->
   
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
<style>
        
        /* Bottom right text */
.text-block  {
margin-bottom:15px; width:900px; font-weight:300; line-height:34px; font-size:20;
 position: absolute;
  top: 3px;
  right: 2px;
  background-color: black;
  color: white;
  padding-left: 15px;
  padding-right: 15px;
   opacity: 0.4;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
        
        
        /* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-bottom:15px; display:inline-block; font-weight:500; line-height:80px; font-size:80px;
}
        .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  
}

div.a {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid red;
}

div.b {
  position: absolute;
  right: -3px;
  width: 100px;
  height: 120px;
  border: 3px solid blue;
} 

div.c {
  position: absolute;
  right: 150px;
  width: 200px;
  height: 120px;
  border: 3px solid green;
} 

#logo-container img {
   width: 50%;
   height: auto;
}

.top_slider .slide_a {
	height:100%;
	/*background-image:url(../images/slider/slide1_bg.jpg);*/
	background-size:cover;
	background-attachment:fixed !important;
}

.top_slider .slide_a .flex_caption1 {
	position:absolute;
	z-index:30;
	left:50%;
	top:45%;
	width:100%;
	margin-left:-585px;
	color:#333;
	transform: translateY(-50%);
	-o-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}
.top_slider .slide_a .flex_caption1 .title1 {margin-bottom:15px; display:inline-block; font-weight:500; line-height:80px; font-size:80px;}
.top_slider .slide_a .flex_caption1 .title2 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide_a .flex_caption1 .title3 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide_a .flex_caption1 .title4 {margin-bottom:15px; width:680px; font-weight:300; line-height:34px; font-size:26px;}


</style>
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
            <div class="container">
                 <?php include "main-menu.php"; ?>
            </div>
            
            <!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <!-- TOP SLIDER -->
                    <?php 
                    if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){
                    include "slide.php"; 
                    }
                    ?>
			<!-- //TOP SLIDER -->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    

	<section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">DISKOMINFO KAB. BANDUNG</h2>
                <p class="text-center wow fadeInDown">Data, Informasi dan Layanan pada Dinas Komunikasi Informatika dan Statistik Pemerintah Kabupaten Bandung</p>
            </div>

            <div class="row">
                <div class="features">
                      <?php echo $contents; ?>
                    </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->
    
    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Fun Facts</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="136800" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1231+" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="6000" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="2000" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->
    
        <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">OUR Latest Work</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".creative">Printing</a></li>
                    <li><a href="#" data-filter=".corporate"> Web  </a></li>
                    <li><a href="#" data-filter=".portfolio">Illustration </a></li>
                    <li><a href="#" data-filter=".portfolio">Media </a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_1.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_2.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_3.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_4.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_5.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_6.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                           
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_7.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/work_8.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                           
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
    
    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team_1.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team_2.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team_3.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                       
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team_4.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                       
                    </div>
                </div>
            </div>

            
            
        </div>
    </section><!--/#meet-team-->
    
    
    
    
    
    <section id="blog">
        <div class="container">
            <div class="section-header" align='center'>
                <h2 class="section-title text-center wow fadeInDown">RADIO KANDAGA</h2>
          <audio controls><source src='http://220.247.175.51:8000/;' </source></audio> </div>
			 
             <div class="row">
             <div id="owl-example" class="owl-carousel" center> 
                
                
              
                
               
                
                
                
                
             
                
                
                
                
            </div>
            </div>			

        </div>
    </section> 
    
    
    
    
    
    <!--/#blog-->
    
    <section id="testimonial">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">testimonials</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/testimonail_1.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>
                
                
                </div>
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/testimonail_2.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>
                
                
                </div>
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/testimonail_3.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>
                
                
                </div>
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/testimonail_4.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>
                
                
                </div>
                
                
                
                
                
                

            </div>

        </div>
    </section> <!--/#testimonial-->
	
    

    




    <footer id="footer">
        <div class="container text-center">
          All rights reserved © 2019 | diskominfo
        </div>
    </footer><!--/#footer-->
 <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/mousescroll.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/smoothscroll.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/main.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/scrolling-nav.js"></script>
<script>

    $(document).ready(function($) {
      $("#owl-example").owlCarousel();
    });

    $("body").data("page", "frontpage");

$("#owl-example").owlCarousel({ 
        items:3,   
/*        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,9],
        itemsTablet: [768,5],
        itemsTabletSmall: false,
        itemsMobile : [479,4]*/
})

    </script>
    
</body>
</html>