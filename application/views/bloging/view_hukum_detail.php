<div class="col-md-12"  style="background-color:white; padding:30px; margin-top:-20px;">
    <h4><?= $detail->nama; ?> </h4>
	<div class="row">
	    <div class="col-md-2">
    		<img src="<?=base_url('uploads/label-dokumen.jpg')?>" class="img-polaroid" alt="-"  style='border: 1px solid #80808059;'>
    		<!-- <div class="space"></div>
				<a href="/produk_hukum/unduh/id/605/t/peraturan+menteri+komunikasi+dan+informatika+nomor+2+tahun+2018+tanggal+2+mei+2018" class="btn btn-success" target="_blank" style="margin-left:7px;">Unduh</a>
			<div class="space"></div> -->
		</div>
		<div class="col-md-9">
			<p><?= $detail->katalog; ?> </p>
			<table class="detail-view table table-striped table-condensed" id="yw0">
                <tbody>
                    <tr class="odd">
                        <th>Kategori</th>
                        <td><?= $detail->jenis_nama; ?> </td>
                    </tr>
                    <tr class="even">
                        <th>Nomor/Tahun</th>
                        <td><?= $detail->no.'/'.$detail->tahun; ?> </td>
                    </tr>
                    <tr class="odd">
                        <th> Tanggal unggah</th>
                        <td><?= date('d M Y', strtotime($detail->created_at)) ?></td>
                    </tr>
                    <tr class="even">
                        <th>Dilihat sebanyak</th>
                        <td><?= $detail->jumlah_unduh; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
            $this->load->model('model_hukum');
            $pdf = $this->model_hukum->list_pdf($detail->id);
            $no_path = 1;
            foreach ($pdf->result_array() as $path){
        ?>
        <div class="span9 fileview" style="">
		    <iframe frameborder="0" width="100%" height="750" src="<?php echo base_url($path['file_path']).'#toolbar=1'; ?>"></iframe>
	    </div>
        <?php } ?>

	</div>
</div>
