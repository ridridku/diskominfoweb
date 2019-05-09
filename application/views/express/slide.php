
        <!-- Wrapper for slides -->
       
            <?php 
              $headline = $this->model_utama->headline(0, 5);
              $no = 1;
              foreach ($headline->result_array() as $row){
                  $judul= strtoupper($row['judul']);
                  $isi_berita = strip_tags($row['isi_berita']); 
                  $isi = substr($isi_berita,0,200); 
                  $isi = substr($isi_berita,0,strrpos($isi," "));
                  $tanggal = tgl_indo($row['tanggal']);
                  if ($row['gambar'] == ''){ $foto = 'small_no-image.jpg'; }else{ $foto = $row['gambar']; }
                  if ($no == 1){ $aktif = 'active'; }else{ $aktif = ''; }
                echo "<div class='item $aktif'>
                         <div style='background-image: url(asset/foto_berita/$foto); height:100%; width:100%;background-size:cover;'>
                <div class='slider-inner'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-sm-16 text-center'>
                            <div class='text-block'>
                                <div class='carousel-content'>
                                
                                      <h3><a href='".base_url()."berita/detail/$row[judul_seo]'>$judul</a></h3>
                                    <p>$isi</p>
                                  
                                  
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
                      </div> ";
                  $no++;
              }
            ?>
        <!-- End Item -->
     
        <!-- Controls -->
<!--<div class="item" style="background-image: url(images/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2>Clean and Flexible Business Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>

tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <a class="btn btn-primary btn-lg" href="#">Find Out More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
