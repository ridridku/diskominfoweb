<!DOCTYPE html>
<html lang="en">
  <head>
   <title><?php include "phpmu-title.php"; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php include "phpmu-description.php"; ?>">
    <meta name="keywords" content="<?php include "phpmu-keywords.php"; ?>">
    <meta name="author" content="phpmu.com">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/default.css" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/nivo-slider.css" rel="stylesheet" media="screen" />
  </head>

  <body>
    <div class="container container-content">
    <?php echo "<small class='pull-right waktu'>".hari_ini().", ".tgl_indoo(date('Y-m-d')).", <span id='jam'></span> WIB</small>"; ?>
      <img width='100%' src='<?php echo base_url(); ?>asset/header.jpg'>
      <nav class="navbar navbar-default">
        <?php include "main-menu.php"; ?>
      </nav>
        <?php 
          if ($this->uri->segment(1)=='' OR $this->uri->segment(1)=='utama'){
            include "slide.php"; 
          }
        ?>

      <div class='row'>
        <div class='col-md-8'>
          <div class='col-md-12'><br>
            <?php echo $contents; ?>
          </div>
        </div>

        <div class='col-md-4'>
          <div class='col-md-12 box-sidebar'>
            <?php include "sidebar.php"; ?>
          </div>
        </div>
      </div>

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                      <small class='text-footer'>Copyright (c) <?php echo date('Y'); ?> - DISKOMINFO <br>
                          2019 rd</small>
                    </center>
                    </p>
                </div>
            </div>
        </div>
      </footer>
    </div> <!-- /container -->
    <?php $this->model_utama->kunjungan(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.nivo.slider.js"></script> 
    <script type="text/javascript"> $(window).load(function() { $('#slider').nivoSlider(); }); </script> 
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/js/jquery.validate.js"></script>
    <script> $(document).ready(function(){ $("#formku").validate(); }); $('#myLightbox').lightbox(options);</script>
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
