<section id="home" class="padbot0">
        <!-- Wrapper for slides -->
        <div class="flexslider top_slider">
            <?php 
              $headline = $this->model_utama->headline(0, 5);
              $no = 1;
              foreach ($headline->result_array() as $row){
                  $isi_berita = strip_tags($row['judul']); 
                  $isi = substr($isi_berita,0,700); 
                  $isi = substr($isi_berita,0,strrpos($isi," "));
                  $tanggal = tgl_indo($row['tanggal']);
                  if ($row['gambar'] == ''){ $foto = 'small_no-image.jpg'; }else{ $foto = $row['gambar']; }
                  if ($no == 1){ $aktif = 'active'; }else{ $aktif = ''; }
                  
                 echo "<ul class='slides'>
                    <li class='slide'.$no>
                        <div style='background-image: url(asset/foto_berita/$foto); height:100%; width:100%;background-size:cover;'> </div>  
                        <div class='text-block'> 
                        <p>".$isi."</p>
                        </div>
                        <a class='slide_btn FromRight' href='".base_url()."berita/detail/$row[judul_seo]'>Read More</a>     
                         <a href='".base_url()."berita/detail/$row[judul_seo]'><span class='btn btn-warning btn-xs'><small>Baca Selanjutnya</small></span></a></p>
                    </li>";
                    $no++;
              }
            ?></ul>   
        <!-- End Item -->
        <!--</div>-->
        <!-- Controls -->
  <a class="left carousel-control" href="#custom_carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#custom_carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
</section>