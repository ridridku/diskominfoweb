<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DISKOMINFO</title>
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
    
    
<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.css" rel="stylesheet">

<style>
        /*---------------------------------------
   3.2 SECTION: CLIENTS LIST
-----------------------------------------*/

.client-logos {
	z-index: 1;
	margin-bottom: 0;
	text-align: center;
}

.client-logos li {
	display: inline-block;
	margin: 25px 25px 25px 25px;
	vertical-align: middle;
}

.client-logos li a {
	display: block;
	padding: 5px;
}

.client-logos li img {
	max-height: 40px;
	opacity: 0.6;
	-webkit-filter: grayscale(1);
	filter: grayscale(1);
}

.client-logos li img:hover {
	opacity: 1;
	-webkit-filter: initial;
	filter: initial;
}

.clients {
	border-bottom: 1px solid #dadfe3;
	background: rgba(255, 255, 255, 0.9);
}


@media screen and (max-width: 600px) {
  .text-block {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
}

/* Bottom right text */
.text-block  {
margin-bottom:15px; width:1200px; font-weight:300; line-height:34px; font-size:20;
position:relative;
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
            <div class="container" >
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
   
          <?php 
                    if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){
                    include "info_diskom.php"; 
                    }
                    ?>
        <section id="portfolio">
        <div class="container" col-md-12>
                       
                    <?php echo $contents; ?>
        </div><!--/.container-->
    </section><!--/#portfolio-->
    
    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">STRUKTURAL DISKOMINFO</h2>
                <p class="text-center wow fadeInDown">Struktur Organisasi Diskominfo Kabupaten Bandung
            </div>

            <div class="row">
          <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                             <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/1.jpg" alt=""/>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                <div class="team-content">
                       <span class="post">Ir. Hj. ATIH WITARTIH, M.Si</span>
                </div>
                        <div class="team-layer">
                            <a href="#">KEPALA DINAS DISKOMINFO</a>
                            
                        </div>
                    </div>
	
             </div>
               
             
               
                    
          <div class="col-md-3 col-sm-6">
             
                    <div class="our-team">
                        <div class="pic">
                             <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/2.jpg" alt=""/>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                          <span class="post">CECEP HENDRAWAN</span>
                        </div>
                        <div class="team-layer">
                            <a href="#">SEKRETARIS DINAS</a>
                           
                        </div>
                    </div>
                </div>
               
                 
                 
                 <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                           <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/3.jpg" alt=""/>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                             <span class="post">Ir. ANITA EMMAYANTI, MT</span>
                        </div>
                        <div class="team-layer">
			<a href="#">KEPALA BIDANG TIK</a>
                         
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                          <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/4.jpg" alt=""/>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <span class="post">Hj. IRMA NOVITA, SH.,Sp.I</span>
                           
                        </div>
                        <div class="team-layer">
                            <a href="#">KEPALA BIDANG IKP</a>
                           
                        </div>
                    </div>
                </div>
				
		 </div>
            <br>
                <div class="row">		
		
                      <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/5.jpg" alt=""/>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                             <span class="post">ASEP ROCHMANSYAH, S.Si.,M.AP</span>
                            
                        </div>
                        <div class="team-layer">
                            <a href="#">KEPALA BIDANG STATISTIK</a>
                            
                        </div>
                    </div>
                </div>
				
				
				    
               <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                          <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/6.jpg" alt="">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                             <span class="post">LUSIANTO, S.Kom.,M.Si</span>
                        </div>
                        <div class="team-layer">
                            <a href="#">KEPALA BIDANG APTIKA</a>
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                          <img  src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/7.jpg" alt="">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                             <span class="post">Dra. ANYA ROSMIATI SOERYA</span>
                        </div>
                        <div class="team-layer">
                            <a href="#">KEPALA BIDANG KEAMANAN INFORMASI DAN PEERSANDIAN</a>
                        </div>
                    </div>
                </div>
	        </div>
      


    </section><!--/#meet-team-->
    <section id="blog">
        <div class="container">
            <div class="section-header" align='center'>
                <h2 class="section-title text-center wow fadeInDown">RADIO KANDAGA</h2>
          <audio controls><source src='http://220.247.175.48:8000/;' </source></audio> </div>
			 
             <div class="row">
             <div id="owl-example" class="owl-carousel" center> 
                
            </div>
            </div>			

        </div>
    </section> 

    <!--/#blog-->
    
     <!--/#testimonial-->
	




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
     <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
    <script> $(document).ready(function(){ $("#formku").validate(); }); $('#myLightbox').lightbox(options);</script>
    <script type="text/javascript">
      $(document).ready(function() {
        var $lightbox = $('#lightbox');
        
        $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'), 
                src = $img.attr('src'),
                alt = $img.attr('alt'),
                css = {
                    'maxWidth': $(window).width() - 100,
                    'maxHeight': $(window).height() - 100
                };
            $lightbox.find('.close').addClass('hidden');
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
        });
        
        $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');
            $lightbox.find('.modal-dialog').css({'width': $img.width()});
            $lightbox.find('.close').removeClass('hidden');
        });
      });

      function jam(){
        var waktu = new Date();
        var jam = waktu.getHours();
        var menit = waktu.getMinutes();
        var detik = waktu.getSeconds();
         
        if (jam < 10){ jam = "0" + jam; }
        if (menit < 10){ menit = "0" + menit; }
        if (detik < 10){ detik = "0" + detik; }
        var jam_div = document.getElementById('jam');
        jam_div.innerHTML = jam + ":" + menit + ":" + detik;
        setTimeout("jam()", 1000);
      } jam();
    </script>
</body>
</html>