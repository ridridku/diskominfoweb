								
<?php //target='_blank' rel="noopener noreferrer"?kategori=15&nomor=&tahun=1&tentang=&submit=
 $group_hukum = $this->model_utama->group_hukum();
 foreach ($group_hukum->result_array() as $rows){
  
     echo "<ul><li><a target='_blank' rel='noopener noreferrer' href=".base_url()."hukum/search?kategori=$rows[jenis_id]&nomor=&tahun=1&tentang=&submit=><span class='category'>$rows[jenis_nama]</span><span class='number'>($rows[jml])</span></a></li></ul>";
 }echo "";
 



