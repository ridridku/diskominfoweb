<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta name="description" content="<?php include "phpmu-description.php"; ?>">
        <meta name="keywords" content="<?php include "phpmu-keywords.php"; ?>">
        <meta name="google-site-verification" content="YoHt1Ivw5HFvAMNc9tW6auGayLJE1Lsr2k5-PRQxisA" />
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>JDIH KAB.BANDUNG</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Bootstrap 3.3.5 -->
		 <!-- <script src="<?php echo base_url(); ?>asset/admin/bootstrap/js/bootstrap.min.js"></script> -->
		<!-- DataTables -->
		<!-- <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/dataTables.bootstrap.min.js"></script> -->
		 <!-- jQuery 2.1.4 -->
		 <script src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
		<script src="<?php echo base_url(); ?>asset/admin/datatable/js/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/bloging/img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.min.css">
		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.transitions.css">
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/meanmenu.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/normalize.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bloging/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/responsive.css">
		<!-- modernizr JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body class="home-1">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header-area start -->
		<header id="header" class="header-area">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="header-top-left">
								<ul class="social-icons">
									<div class="logo">
										<img  src="<?php echo base_url(); ?>template/bloging/img/logo/logo-jdih.png" alt="Logo" />
									</div>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="header-top-left">
								<ul class="social-icons">
									<h4 style="color:white; text-align:center; margin-top:30px;"><strong>JARINGAN DOKUMENTASI DAN INFORMASI HUKUM <br>KABUPATEN BANDUNG</strong></h4>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="header-top-right fix">
								<div class="header-links">
								</div>
								<ul class="social-icons">
									<div class="logo">
										<img  style=" width: 159px;height: 124px; float: right;" src="<?php echo base_url(); ?>template/bloging/img/logo/logo-bdg.png" alt="Logo" />
									</div>
								</ul>
								<!-- <div class="header-search"> -->
									<!-- <form action="#" method="post">
										<button type="button" class="search-toggler"><i class="fa fa-search"></i></button>
									</form> -->
								<!-- </div> -->
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.header-top -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<!-- <div class="col-md-3">
							<div class="logo">
								<img  src="<?php echo base_url(); ?>template/bloging/img/logo/logo-jdih.png" alt="Logo" />
							</div>
						</div> -->

						<div class="col-md-12">
							<div class="main-menu">
								<nav style="margin-bottom: 25px;">
								   <?php  include "main-menu.php"; ?>
								</nav>
							</div><!-- /.main-menu -->
						</div>
						<!-- <div class="col-md-2">
							<div class="logo">
								<img  src="<?php echo base_url(); ?>template/bloging/img/logo/logo-bdg.png" alt="Logo" />

							</div>



						</div> -->

					</div>
				</div>
				<!-- mobile-menu-area start -->
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<nav id="dropdown">
									 <?php  include "main-menu-mobile.php"; ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- mobile-menu-area end -->
			</div>
		</header><!-- /.header-bottom -->
        <!-- header-area end -->

        <!-- search-area start -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search-form">

							            <?php
            $attributes = array('id' => 'formki','role'=>'form');
            echo form_open('berita',$attributes);
          ?>
              <div style='width:100%' class="input-group"><span class="search-close"></span>
                <input type="text" name='cari' class="form-control" placeholder="Cari Informasi Disini...">
                <span class="input-group-btn">
                  <button type='submit' class="btn btn-danger" name='submit' type="button">Go!</button>
                </span>
              </div><br>
          <?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- search-area end -->

		<!-- slider-area start -->
		<div id="slider" class="slider-area">
			<div id="main-carousel" class="slider-wrap">
<!--				<div class="single-slide">
					<a href="#"><img src="<?php // echo base_url(); ?>template/bloging/img/home-2/slider/1.jpg" alt="Slide Image" /></a>
					<div class="slide-text-container text-center">
						<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
					</div>
				</div> /.single-slide -->

<?php
          if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){
            include "slide.php";
          }
        ?>

			</div><!-- /#main-carousel -->
		</div>
		<!-- slider-area end -->

		<!-- main-content-area start -->
		<div id="main-content" class="main-content-area">
			<div class="container">
				<div class="row">
					<div class="sidebar col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
						<div class="sidebar-area fix">
						    <div class="single-sidebar-widget">
                                            <h6 style='background-color:#dff0d8' class="widget-title">categories</h6>
                                                <div class="sidebar-content">
                                                    <div class="categories-list">
                                                        
                                                    </div>
                                                </div><!-- /.sidebar-content -->
                                            </div><!-- /.single-sidebar-widget -->
											
											
							<div  class="single-sidebar-widget">
								<h6 style='background-color:#dff0d8'  class="widget-title">Sambutan Asisten Pemerintahan</h6>
                                                                <span class="category" >Kab.Bandung</span>
								<div class="sidebar-content about-me">
									<div class="my-photo">
										<a href="#"><img class="img-circle" src="<?php echo base_url(); ?>template/bloging/img/sidebar/me.jpg" alt="My Image" /></a>
									</div>
									<p>Selamat datang di Website Bagian Hukum Kabupaten Bandung.
                                                                            Website ini sebagai sarana publikasi untuk memberikan
                                                                            Informasi dan gambaran tentang Bagian Hukum Kab. Bandung
                                                                            alam melaksanakan pelayanan informasi. Melalui keberadaan website
                                                                            ini kiranya masyarakat dapat mengetahui seluruh informasi tentang Kebijakan dan Kegiatan.</p>
								</div><!-- /.sidebar-content -->
							</div><!-- /.single-sidebar-widget -->

                            	 <div class="single-sidebar-widget">
                                            <h6 style='background-color:#dff0d8' class="widget-title">Android JDIH Kab.Bandung</h6>
                                                <div class="sidebar-content">
                                                    <div class="categories-list">
                                                 <iframe
                                                    src="https://www.appsgeyser.com/social_widget/social_widget.php?width=295&height=150&apkName=JDIHKABBANDUNG_8059314&simpleVersion=no"
                                                    width="320" height="180" vspace="0" hspace="0" frameborder="no"
                                                    scrolling="no" seamless=""
                                                    allowtransparency="true"></iframe>
                                                    </div>
                                                </div><!-- /.sidebar-content -->
                                            </div><!-- /.single-sidebar-widget -->            

							<div class="single-sidebar-widget">
								<h6 style='background-color:#dff0d8'  class="widget-title">Berita</h6>
								<div class="sidebar-content">
									 <?php include "sidebar.php"; ?>
								</div><!-- /.sidebar-content -->
							</div><!-- /.single-sidebar-widget -->



						</div><!-- /.sidebar-area -->
					</div>

                                    <div class='col-md-8'>
                                                <div class='col-md-12'><br>
                                                  <?php echo $contents; ?>
                                                </div>
                                      </div>
				</div>
			</div>
		</div>
		<!-- main-content-area end -->

		<!-- footer-area start #66cc99-->
		<footer id="footer" class="footer" style="    background-color:#dff0d8; padding: 30px; color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="footer-about-us">
                    <h3 class="footer-title">Informasi kami</h3>
                    <address class="footer-address">
                        <p><i class="fa fa-map"> </i> Komplek Pemda Kab. Bandung Jl. Raya Soreang Km. 17 Soreang, Bandung, Jawa Barat 40922</p>
                        <p><i class="fa fa-phone"> </i> (022) 5891724</p>
                        <p><i class="fa fa-fax"> </i> (021) 74646290</p>
                        <p><i class="fa fa-envelope-o"> </i> bag.hukum@bandungkab.go.id</p>
                        <p><i class="fa fa-link"> </i> http://jdih.bandungkab.go.id/</p>
                    </address>
                    <p class="footer-social social">
                        <a style="color: blue; text-decoration: none;" href="https://twitter.com/kab_bandung" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-square-o fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
                        <a style="color: blue; text-decoration: none;" href="https://www.facebook.com/humaspemkabbandung/" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-square-o fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x"></i>
							</span>
						</a>
                        <!-- <a href="https://www.youtube.com/channel/UCcqkZgXRgvvdPoMNPIashBQ/videos" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-square-o fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x"></i>
							</span>
						</a> -->
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                
                <style>
ul.a {list-style-type: circle;}
ul.b {list-style-type: square;}
ol.c {list-style-type: upper-roman;}
ol.d {list-style-type: lower-alpha;}
</style>
                <h3 class="footer-title">Sitemap</h3>
                <ol class="b" style="color:#808080; text-decoration: none;">
                    <li class="b"><a style="color:#808080; text-decoration: none;" href="<?=base_url()?>" target="_blank">Beranda</a></li>
						<li class="a"  style="color: #808080;" >Profil
                                                    <ul class="a">
							<li><a style="color: #808080; text-decoration: none;" href="<?=base_url('/page/detail/visi-dan-misi')?>" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
							<li><a style="color: #808080; text-decoration: none;" href="<?=base_url('/page/detail/struktur-organisasi')?>" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;Struktur Organisasi</a></li>
							<li><a style="color: #808080; text-decoration: none;" href="<?=base_url('/page/detail/tupoksi')?>" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;Tupoksi</a></li>
							</ul>
						</li>
                    <li class="d"><a style="color: #808080; text-decoration: none;" href="<?=base_url('utama')?>" target="_blank">Berita</a></li>
                    <li><a style="color: #808080; text-decoration: none;" href="<?=base_url('hukum')?>" target="_blank">Produk Hukum</a></li>
                    <li><a style="color: #808080; text-decoration: none;" href="<?=base_url('agenda')?>" target="_blank">Kegiatan</a></li>
                    <li><a style="color: #808080; text-decoration: none;" href="<?=base_url('hubungi')?>" target="_blank">Kontak</a></li>
                    <li><a style="color: #808080; text-decoration: none;" href="<?=base_url('faq')?>" target="_blank">Faq</a></li>

		</ol>
            
            </div>
            <div class="col-md-4 col-sm-6">
			<h3 class="footer-title">Sukai Halaman</h3>
			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1&appId=308978232535690&autoLogAppEvents=1';
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-page" data-href="https://www.facebook.com/humaspemkabbandung/" data-tabs="timeline" data-height="50" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/humaspemkabbandung/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/humaspemkabbandung/">Humas Pemkab Bandung</a></blockquote></div> </div>
        </div>
    </div>
</footer>
		<footer id="footer" class="footer-area text-center" style=" padding: 13px 0 7px;">
			<div class="footer-logo" style="margin: 0px;">
                <a href="http://bandungkab.go.id/"><img style="width: 230px;height: 69px;" src="<?php echo base_url(); ?>template/bloging/img/logo/logo sekda bandung.png" alt="Footer Logo" /></a>
			</div>
			<p class="copyright-text">&copy; 2018 JDIH Kab.Bandung All right reserved.</p>
			BY PT.ENERKOM 2018
		</footer>
		<!-- footer-area end -->
          <?php $this->model_utama->kunjungan(); ?>
		<!-- jquery
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js"></script>
		<!-- meanmenu JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.scrollUp.min.js"></script>
		<!-- plugins JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/plugins.js"></script>
		<!-- main JS
		============================================ -->
        <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/main.js"></script>

		<!-- DataTable Library -->
		<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script> -->


		<script src="<?php echo base_url(); ?>asset/admin/datatable/js/jquery.dataTables.min.js"></script>

		<link href='<?php echo base_url(); ?>asset/admin/datatable/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!--
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript"> $(window).load(function() { $('#slider').nivoSlider(); }); </script>-->
     <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
    <script> $(document).ready(function(){ $("#formku").validate(); }); $('#myLightbox').lightbox(options);</script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(ev){
        $('#custom_carousel').on('slide.bs.carousel', function (evt) {
          $('#custom_carousel .controls li.active').removeClass('active');
          $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
        })
    });
    </script>
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

    </script>


    </body>
</html>


