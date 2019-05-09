           <!-- Form pencarian produk Hukum -->
		<div class="row">
<div class="col-md-12">
<div class="single-review">
<div class="post-img">
   <a href="#" class="post-tag">Cari Produk Hukum</a>
   <div class="post-info">
   </div>
</div>
<div class="post-content" style="margin: -20px 0 30px;">
<div class="port-content container-fluid">
<form class="form-horizontal" role="form" method="GET" action="<?=base_url('hukum/search')?>">
<div class="form-group">
   <label class="col-sm-3 control-label required" style="text-align:left;" for="nama_barang">Jenis</label>
   <div class="col-sm-9">
      <select class="form-control" style="max-width: 100%;" id="kategori" name="kategori">
         <option value="all">Semua Peraturan</option>
         <optgroup label="Peraturan Pusat">
            <option value="1">Undang Undang Dasar 1945</option>
            <option value="2">Ketetapan MPR</option>
            <option value="3">Undang-Undang</option>
            <option value="4">PP Pengganti UU</option>
            <option value="5">Peraturan Pemerintah</option>
            <option value="6">Peraturan Presiden</option>
            <option value="7">Peraturan Menteri</option>
           
         </optgroup>
         <optgroup label="Peraturan Propinsi">
            <option value="8">Peraturan Daerah Provinsi</option>
            <option value="9">Peraturan Gubernur</option>
       
         </optgroup>
         <optgroup label="Peraturan Kabupaten" class="">
            <option value="10">Peraturan Daerah Kabupaten</option>
            <option value="11">Peraturan Bupati</option>
            <option value="12">Peraturan DPRD</option>
             <option value="13">Keputusan Bupati</option>
            <option value="14">Peraturan Desa</option>
           
         </optgroup>
      </select>
   </div>
</div>
<div class="form-group">
   <label class="col-sm-3 control-label required" style="text-align:left;" for="nama_barang">Nomor</label>
   <div class="col-sm-4">
      <input type="text" class="form-control" id="search-descr" name="nomor" placeholder="...">
   </div>
</div>
<div class="form-group">
   <label class="col-sm-3 control-label required" style="text-align:left;" for="nama_barang">Tahun</label>
   <div class="col-sm-4">
      <select name="tahun" id="tahun" class="form-control" required>
         <option value="1">Semua Tahun</option>
         <?php for($i=date("Y");$i>=1980;$i--) {
            echo "<option value='".$i."'>".$i."</option>";
            }?>
      </select>
   </div>
</div>
<div class="form-group">
   <label class="col-sm-3 control-label required" style="text-align:left;" for="nama_barang">Tentang</label>
   <div class="col-sm-9">
      <input maxlength="50" class="form-control" name="tentang" id="tentang" type="text">
   </div>
</div>				

                    <!-- <div class="form-group">
                      <label class="col-sm-3 control-label required" style="text-align:left;" for="nama_barang">Status Akhir</label>
                      <div class="col-sm-9">
                        <input maxlength="50" class="form-control" name="status_akhir" id="status_akhir" type="text">
                      </div>
                    </div> -->
                    <div class="pull-right">
                      <button type="submit" id="submit" name="submit" class="btn btn-primary"> Cari</button>
                    </div>
                  </form>
                </div>
              </div>
						</div><!-- /.single-review -->
					</div>
				</div>
            <?php
            
          
            
                $kateogri = $this->model_utama->kategori(0, 4);
                
                $no = 1;
                echo " <h2 class='section-title'>Berita Terbaru</h2>";
                foreach ($kateogri->result_array() as $rows){
                  echo "<div class='border-home col-md-6'>";
                    $headline = $this->model_utama->berita_perkategori($rows['id_kategori'], 0, 1);
                    foreach ($headline->result_array() as $row){
                        $isi_berita = strip_tags($row['isi_berita']);
                        $isi = substr($isi_berita,0,180);
                        $isi = substr($isi_berita,0,strrpos($isi," "));
                        $tanggal = tgl_indo($row['tanggal']);
                        if ($row['gambar'] == ''){ $foto = 'small_no-image.jpg'; }else{ $foto = $row['gambar']; }
                        echo "<p class='sidebar-title'> &nbsp; Berita $rows[nama_kategori]</p>
                              <div>
                                <img class='img-thumbnail' width='100%' style='height:185px' src='".base_url()."asset/foto_berita/".$foto."'>
                                <a href='".base_url()."berita/detail/$row[judul_seo]'><strong>".$row['judul']."</strong></a>
                                <small class='date text-danger'><span class='glyphicon glyphicon-time'></span> $row[hari], $tanggal, $row[jam] WIB</small>
                                <p>".$isi."...</p>
                              </div>";
                    }

                    $headline_detail = $this->model_utama->berita_perkategori($rows['id_kategori'], 1, 5);
                    echo "<table class='table table-hovered table-condensed table-striped'>";
                    foreach ($headline_detail->result_array() as $row){
                      $tanggaldetail = tgl_indo($row['tanggal']);
                      if ($row['gambar'] == ''){ $fotodetail = 'small_no-image.jpg'; }else{ $fotodetail = $row['gambar']; }
                        echo "<tr>
                                <td><img class='img-thumbnail pull-left' width='80px' style='margin-right:6px; height:60px' src='".base_url()."asset/foto_berita/".$fotodetail."'>
                                    <a href='".base_url()."berita/detail/$row[judul_seo]'>".$row['judul']."</a>
                                    <span class='btn btn-danger btn-xs'><small>$row[dibaca] View</small></span><br>
                                    <small class='date text-danger'><span class='glyphicon glyphicon-time'></span> $row[hari], $tanggaldetail, $row[jam] WIB</small></td>
                              </tr>";
                      }
                  echo "</table>
                        <a class='btn btn-default btn-sm btn-block' href='".base_url()."berita/kategori/$rows[kategori_seo]'>Lihat Semua Berita $rows[nama_kategori]</a>
                  </div>";
                  if ($no % 2 == 0){
                      echo "<div style='clear:both'><hr></div>";
                  }
                  $no++;
                }
                
               
                
                 echo " <h2 class='section-title'>Dokumen Hukum Terbaru</h2>";
                
                $hk_kategori = $this->model_utama->hukum_kategori(0,4);
                
  /* DASSHBOARD HUKUM KATEGORI */

                  foreach ($hk_kategori->result_array() as $rows){
                      echo "<h3 >$rows[jenis_nama]</h1><br>";
                    $hukum2 = $this->model_utama->hukum_perkategori($rows['jenis_id'],0,4);
                    
                     $n1 = 1;
                     foreach ($hukum2->result_array() as $row){
                            echo "<table class='table table-hovered table-condensed table-striped '>";
                            echo "   <a href='".base_url()."hukum/detail_hukum/$row[id]'>".$row['nama']."</a><br> ";
                            echo " <span class='btn btn-info btn-xs'><small> $row[jenis_keterangan]</small></span>"
                            . "<span class='btn btn-primary btn-xs'>$row[tahun]</small></span>"
                            . "<span class='btn btn-warning btn-xs'>$row[status_nama]</small></span>"
                            . "</td></tr></table>";
                     
                          if ($n1 % 2 == 0){
                         echo "<div style='clear:both'><hr></div>";
                                     }                   
                    }
                    
                              $n1++;       
                 
                  }
                 


            ?>


