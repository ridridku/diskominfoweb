

            <script>

                
                
                $(document).ready(function() {

                    $('.sidebar').hide();
                    $(".col-md-8").addClass("col-md-12");
                    $(".col-md-12").removeClass("col-md-8");
                    // $('#example1').DataTable( {

                    // } );
                    var jsonData = <?php echo $berita ?>;

                    $("#example1").DataTable({
                        data: jsonData,
                      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
                        columns: [
                            {
                                "className":      'details-control',
                                "orderable":      false,
                                "data": "id",
                                "render": function (data, type, row, meta) {
                                    return '<a data-toggle="modal" data-target="#myModal'+data+'"'  + '"><span class="glyphicon glyphicon-plus"></span></a>';
                                }
                            },
                            { 'data': 'jenis_nama' },
                            { 'data': 'no' },
                            { 'data': 'tahun' },
                           
                            { 'data': 'nama',
                                'render' : function (data, type, row, meta) {
                                    return '<a href="<?=base_url()?>hukum/detail_hukum/'+row.id+'">'+data+'</a>';
                                }
                             },
                            { 'data': 'status_nama',
                              'render' : function (data, type, row, meta) {
                              return '<div class="modal fade" id="myModal'+row.id+'" role="dialog" style="margin-top: 150px;">' +
                                    '<div class="modal-dialog">' +
                                    ' <div class="modal-content"> ' +
                                    ' <div class="modal-header"> ' +
                                        '  <button type="button" class="close" data-dismiss="modal">&times;</button> ' +
                                        '  <h4 class="modal-title">Informasi Tambahan</h4> ' +
                                        ' </div> ' +
                                        ' <div class="modal-body"> ' +
                                        '  <dl class="dl-vertical"> ' +
                                        '  <dt>Abstak : </dt> ' +
                                            ' <dd>'+ row.abstrak +'</dd> ' +
                                            ' <dt>Katalog</dt> ' +
                                            '   <dd>'+ row.katalog +'</dd> ' +
                                            '<div class="modal-footer"> ' +
                                        ' <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> ' +
                                        '    </div> ' +
                                        '</div> ' +

                                    ' </div> ' +
                                    '</div>'
                              }
                            }
                        ],
                        "paging": true,
                        "lengthChange": false,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false
                    });
                });
            </script>


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
<form class="form-horizontal" role="form" method="GET" action="<?=base_url('hukum/search/')?>">
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
      <input type="text" class="form-control" id="search-descr" name="nomor" value="" placeholder="...">
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
      <input maxlength="50" class="form-control" name="tentang" value="" id="tentang" type="text">
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
            echo "<p class='sidebar-title' style='margin-top: -20px;'><span class='glyphicon glyphicon-list'></span> &nbsp; $title</p><hr>";

            echo '
            <table id="example1" class=" stripe" style="width:100%">
            <thead >
                <tr>
                    <th style="text-align:center;"></th>
                    <th style="text-align:center;">Jenis</th>
                    <th style="text-align:center;">Nomor</th>
                    <th style="text-align:center;">Tahun</th>
                   
                    <th style="text-align:center;">Tentang</th>
                    <th style="text-align:center;">Status</th>
                </tr>
            </thead>
            <tbody>';


                    echo "</tbody></table>"
            ?>
            <br><br>
