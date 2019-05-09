<!DOCTYPE html>
<html lang="en">
<head>

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
   width: 100%;
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
    
        <meta charset="utf-8">
        <title>DISKOMINFO | KAB. BANDUNG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="#">

        <!-- CSS -->
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	 <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
        <!--<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.css" rel="stylesheet">-->
        <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/font-awesome.css" rel="stylesheet">
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/superfish.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/owl.carousel.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/animate.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.BlackAndWhite.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo ">
                                            <img height="180" width="180" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/logo.png" alt="" />
					 <!--<a href="index.html" ><span class="b5">DISKOMINFO</span></a>--> 
					</div>
                                        <!-- //LOGO -->
                                        
                                        <!--<div class="c"> <a href="index.html" ><span class="b5">DISKOMINFO</span></a> </div>-->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							  <?php include "main-menu.php"; ?>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
                    <?php 
                    if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){
                    include "slide.php"; 
                    }
                    ?>
			<!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section>
			
			
			
			<!-- CLEAN CODE -->
			<div class="cleancode_block">
				
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
							<div class="section-header" align="center">
                                                            <h2 class="dark-text" style="color:white">DATA, INFORMASI DAN LAYANAN</h2>
                                                        <div class="colored-line"></div>
                                                        <div class="sub-heading">Data, Informasi dan Layanan pada Dinas Komunikasi Informatika dan Statistik Pemerintah Kabupaten Bandung</div>
						</div>
						
					</div>
					<ul id="myTab" class="nav nav-tabs">
                                            
                                            
                                           
						
						
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->
			
			<!-- MULTI PURPOSE -->
			<div class="purpose_block">
				
				<!-- CONTAINER -->
				<div class="container">
					
					<!-- ROW -->
					<div class="row">
					
						
						<div class='col-md-12'>
          <div class='col-md-12'><br>
            <?php echo $contents; ?>
          </div>
        </div>
						
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //MULTI PURPOSE -->
		</section><!-- //ABOUT -->
		
		
		<!-- PROJECTS AWAL KODING -->
		<!-- //PROJECTS -->
		
		
		<!-- TEAM -->
		<section id="team">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Our</b> Team</h2>
				
				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">
				
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/1.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Sarah Brown</p>
										<span>Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/2.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>David Jones</p>
										<span>Creative Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/3.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Kate Smith</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Peter Parker</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman4 -->
						
						<!-- crewman5 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Jim Moss</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman5 -->
						
						<!-- crewman6 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>John Marks</p>
										<span>Designer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman6 -->
						
						<!-- crewman7 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Joe Mades</p>
										<span>Developer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman7 -->
						
						<!-- crewman8 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Julia Anderson</p>
										<span>Developer</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman8 -->
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
		<!-- NEWS -->
		<!-- //NEWS -->
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
            
           
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
	
	</div><!-- //MAP -->

</div>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.nivo.slider.js"></script> 
    <script type="text/javascript"> $(window).load(function() { $('#slider').nivoSlider(); }); </script> 
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
    <script> $(document).ready(function(){ $("#formku").validate(); }); $('#myLightbox').lightbox(options);</script>
</body>
</html>