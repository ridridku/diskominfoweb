<!--/#logo client-->
<!--<div class="clients white-bg" id="clients" role="region" aria-label=" Affiliates Logos">
<div class="container">
<ul class="client-logos">
<li>
<a href="http://diskominfo.bandungkab.go.id" title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/04/Sekre-Logo.png" alt="Logo">


 echo "<img width='100%' src='".base_url()."asset/foto_banner/".$record['gambar']."'>";
</a>
</li>
<li>
<a href="http:/diskominfo.bandungkab.go.id" title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/04/PIP-Logo.png" alt="Logo">
</a>
</li>
<li>
<a href="http://diskominfo.bandungkab.go.id" title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/04/PKP-Logo.png" alt="Logo">
</a>
</li>
<li>
<a href="http://diskominfo.bandungkab.go.id" title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/04/TIK-Logo.png" alt="Logo">
</a>
</li>
<li>
<a href="http://diskominfo.bandungkab.go.id" title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/04/eGOV-Logo.png" alt="Logo">
</a>
</li>
<li>
<a href="http://diskominfo.bandungkab.go.id title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/04/SSP-Logo.png" alt="Logo">
</a>
</li>
<li>
<a href="http://diskominfo.bandungkab.go.id" title="">
<img src="//dkis.cirebonkota.go.id/wp-content/uploads/2017/02/lpse.png" alt="Logo">
</a>
</li>
</ul>
</div>
</div>-->





<div class="clients white-bg" id="clients" role="region" aria-label=" Affiliates Logos">
<div class="container">
    
    <ul class="client-logos">
<?php
              $get_banner=base_url().'/asset/foto-banner';
                $banner = $this->model_utama->banner(0,10); 
                foreach ($banner->result_array() as $rows){
                    echo "<li><a href='".$rows['url']."' title=''target='_blank'>"
                        . "<img   src='".base_url()."asset/foto_banner/$rows[gambar]'  alt='Logo'></a> ";
                    echo "</li >"; 
                }
            ?>

    </ul>
</div>
</div>


    <!--/#logo client-->
<?php
$geturi=base_url().'/template/'.template();

$get_banner=base_url().'/asset/foto-banner';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<section id='services' style='background-color:#ffffff; ' >
        <div class='container'>
<center><div class='pull-center'>
                                <img width='160' height='140' src='$geturi/images/logo-kab.png' alt='img'>
                            </div></center>
            <div class='section-header'>
 
                <h2 class='section-title text-center wow fadeInDown'>DINAS KOMUNIKASI INFORMATIKA KABUPATEN BANDUNG</h2>
                <p class='text-center wow fadeInDown' >DISIPLIN - KREATIF - INOVATIF - SINERGIS</p>
                <p class='text-center wow fadeInDown'>Data, Informasi dan Layanan pada Dinas Komunikasi Informatika dan Statistik Kabupaten Bandung</p>
            </div>

              
        </div><!--/.container-->
    </section><!--/#services-->";
?>