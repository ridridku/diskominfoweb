            <?php
                $kateogri = $this->model_utama->kategori(0, 4);
                $no = 1;
                foreach ($kateogri->result_array() as $rows){
				
				
			
			
                  echo "<div class='border-home col-md-12'>";
                    $headline = $this->model_utama->berita_perkategori($rows['id_kategori'], 0, 1);
                    foreach ($headline->result_array() as $row){
                        $isi_berita = strip_tags($row['isi_berita']); 
                        $isi = substr($isi_berita,0,180); 
                        $isi = substr($isi_berita,0,strrpos($isi," "));
                        $tanggal = tgl_indo($row['tanggal']);
                        if ($row['gambar'] == ''){ $foto = 'small_no-image.jpg'; }else{ $foto = $row['gambar']; }
                        echo "
						
						<div class='section-header'>
						<h2 class='section-title text-center wow fadeInDown center'>&nbsp; $rows[nama_kategori]</h2>
						</div>
						
                              <div>
                                <img class='img-thumbnail' width='100%' style='height:100%' src='".base_url()."asset/foto_berita/".$foto."'><br>
                                <a href='".base_url()."berita/detail/$row[judul_seo]'><strong>".$row['judul']."</strong></a><br>
                                <small class='date text-danger'><span class='glyphicon glyphicon-time'></span> $row[hari], $tanggal, $row[jam] WIB</small>
                                <p>".$isi."...</p>
                              </div>";
                    }

                    $headline_detail = $this->model_utama->berita_perkategori($rows['id_kategori'], 1, 5);
                    echo "<table >";
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
                        <a class='btn btn-primary' href='".base_url()."berita/kategori/$rows[kategori_seo]'>Lihat Semua $rows[nama_kategori]</a>
                  </div>";
                  if ($no % 2 == 0){
                      echo "<div style='clear:both'><hr></div>";
                  }
                  $no++;
                }
            ?>