<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css')?>" rel="stylesheet">






<div class="content-wrapper" style="padding:10px">
	<div class="row">
		<div class="col-xs-12">
			<div class="box" style="overflow: scroll;">
				<div class="box-header">
					<h class="box-title">IDENTIFIKASI CALON SISWA</h>

				</div>
				<div class="box-header">

				</div>
				<!-- /.box-header -->
				<div class="box-body">
        <section class="container-fluid" style="overflow-y: auto; overflow-x: scroll;"><div class="dropdown">
        <button class="btn btn-success" onclick="add_m_calon_siswa()"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
        <button class="btn btn-default" id="btnn2" onclick="reload_table()"><iclass="glyphicon glyphicon-refresh"></i> REFRESH</button>
          </div> <br />
					<table id="table" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Tempat tanggal lahir</th>
								<th>Agama</th>
								<th>Suku</th>
								<th>Bahasa sehari hari</th>
                <th>ALAMAT DESA/KEL</th>
                <th>ALAMAT KECAMATAN </th>
                <th>ALAMAT KABUPATEN</th>
                <th>Pendidikan Terakhir</th>
                <th>..</th>
                <th>..</th>
								<th>Alasan Tidak lanjut sekolah</th>
								<th>Kebiasaan merokok</th>
								<th>Mengkonsumsi Narkoba</th>
								<th>Pernah Bekerja</th>
                <th>Bila</th>
                <th>pernah</th>
                <th>bekerja</th>
                <th>dimana</th>
								<th>Action</th>
              </tr>
						</thead>
						<tbody>
							<tr>
                <td></td>
                <td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>

		</div>
		<!-- /.col -->
	</div>
</div>

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">
   var save_method; //for save method string
   var table;
   var base_url = '<?php echo base_url();?>';

   $(document).ready(function () {

      //datatables
      table = $('#table').DataTable({

         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.

         // Load data for the table's content from an Ajax source
         "ajax": {
            "url": "<?php echo site_url('c_psm_kab/ajax_list')?>",
            "type": "POST"
         },

         //Set column definition initialisation properties.
         "columnDefs": [{
               "targets": [-1], //last column
               "orderable": false, //set not orderable
            },
            {
               "targets": [-2], //2 last column (photo)
               "orderable": false, //set not orderable
            },
         ],

      });

      //datepicker
      $('.datepicker').datepicker({
         autoclose: true,
         format: "yyyy-mm-dd",
         todayHighlight: true,
         orientation: "top auto",
         todayBtn: true,
         todayHighlight: true,
      });

      //set input/textarea/select event when change value, remove class error and remove text help block 
      $("input").change(function () {
         $(this).parent().parent().removeClass('has-error');
         $(this).next().empty();
      });
      $("textarea").change(function () {
         $(this).parent().parent().removeClass('has-error');
         $(this).next().empty();
      });
      $("select").change(function () {
         $(this).parent().parent().removeClass('has-error');
         $(this).next().empty();
      });

   });



   function add_m_calon_siswa() {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title

      $('#photo-preview').hide(); // hide photo preview modal

      $('#label-photo').text('Upload Photo'); // label photo upload
   }

   function edit_m_calon_siswa(id) {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string


      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('c_psm_kab/ajax_edit')?>/" + id,
         type: "GET",
         dataType: "JSON",
         success: function (data) {
            $('[name="id"]').val(data.id);
            $('[name="nama"]').val(data.nama);
            $('[name="jk"]').val(data.jk);
            $('[name="ttl"]').val(data.ttl);
            $('[name="agama"]').val(data.agama);
            $('[name="suku"]').val(data.suku);
            $('[name="bahasa"]').val(data.bahasa);
            $('[name="desa"]').val(data.desa);
            $('[name="kecamatan"]').val(data.kecamatan);
            $('[name="kabupaten"]').val(data.kabupaten);
            $('[name="pt_k1"]').val(data.pt_k1);
            $('[name="pt_k2"]').val(data.pt_k2);
            $('[name="pt_k3"]').val(data.pt_k3);
            $('[name="atls"]').val(data.atls);
            $('[name="km"]').val(data.km);
            $('[name="mn"]').val(data.mn);
            $('[name="pb"]').val(data.pb);
            $('[name="bpbd_k1"]').val(data.bpbd_k1);
            $('[name="bpbd_k2"]').val(data.bpbd_k2);
            $('[name="bpbd_k3"]').val(data.bpbd_k3);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

            $('#photo-preview').show(); // show photo preview modal

            if (data.photo) {
               $('#label-photo').text('Change Photo'); // label photo upload
               $('#photo-preview div').html('<img src="' + base_url + 'upload/' + data.photo +
                  '" class="img-responsive">'); // show photo
               $('#photo-preview div').append('<input type="checkbox" name="remove_photo" value="' + data
                  .photo + '"/> Remove photo when saving'); // remove photo

            } else {
               $('#label-photo').text('Upload Photo'); // label photo upload
               $('#photo-preview div').text('(No photo)');
            }


         },
         error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   function reload_table() {
      table.ajax.reload(null, false); //reload datatable ajax 
   }

   function save() {
      $('#btnSave').text('saving...'); //change button text
      $('#btnSave').attr('disabled', true); //set button disable 
      var url;

      if (save_method == 'add') {
         url = "<?php echo site_url('c_psm_kab/ajax_add')?>";
      } else {
         url = "<?php echo site_url('c_psm_kab/ajax_update')?>";
      }

      // ajax adding data to database

      var formData = new FormData($('#form')[0]);
      $.ajax({
         url: url,
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,
         dataType: "JSON",
         success: function (data) {

            if (data.status) //if success close modal and reload ajax table
            {
               $('#modal_form').modal('hide');
               reload_table();
            } else {
               for (var i = 0; i < data.inputerror.length; i++) {
                  $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass(
                     'has-error'
                     ); //select parent twice to select div form-group class and add has-error class
                  $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[
                     i]); //select span help-block class set text error string
               }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 


         },
         error: function (jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

         }
      });
   }

   function delete_m_calon_siswa(id) {
      if (confirm('Are you sure delete this data?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('c_psm_kab/ajax_delete')?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function (data) {
               //if success reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown) {
               alert('Error deleting data');
            }
         });

      }
   }

</script>




<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">IDENTIFIKASI CALON SISWA</h4>
			</div>
			<div class="modal-body">
    <form action="#" id="form">
				<style type="text/css">
					tr,td{
						padding: 10px;
					}
					.modal-dialog{
						width: 68%;
				</style>

				<!-- no 1 -->
        <!-- no 1 -->
  <table border="1">
    <tr>
      <td colspan="2" rowspan="30" style="vertical-align: baseline;

      ">1</td>
      <td colspan="5">IDENTIFIKASI CALON SISWA</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Nama</td>
      <td colspan="3">: <input type="text" name="nama"></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jenis Kelamin</td>
      <td colspan="3">:  <input type="text" name="jk"></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Tempat tanggal lahir</td>
      <td colspan="3">:  <input type="text" name="ttl"></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Agama</td>
      <td colspan="3">:  <input type="text" name="agama"></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Suku</td>
      <td colspan="3">:  <input type="text" name="suku"></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Bahasa sehari hari</td>
      <td colspan="3">:  <input type="text" name="bahasa"></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Alamat Des/Kel</td>
      <td colspan="3">:  <input type="text" name="desa"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kec</td>
      <td colspan="3">:  <input type="text" name="kecamatan"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kab/kota</td>
      <td colspan="3">:  <input type="text" name="kabupaten"></td>
    </tr>
    
    
    <tr>
      <td>8</td>
      <td>lulus /tidak lulus, sampai kelas</td>
      <td>:   <input type="text" name="pt_k3"></td>
    </tr>

    <tr>
      <td>9</td>
      <td>Pendidikan Terakhir</td>
      <td colspan="3">: <input type="text" name="pt_k1"></td>
    </tr>    
    <tr>
      <td>9</td>
      <td>ALASAN TIDAK LANJUT SEKOLAH</td>
      <td colspan="3">: <input type="text" name="atls"></td>
    </tr>


    <tr>
      <td>10</td>
      <td>Kebiasaan Merokok</td>
      <td colspan="3">: <input type="checkbox" name="km" value="ya"> ya / <input type="checkbox" name="km" value="tidak"> tidak</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Mengkonsumsi narkoba</td>
      <td colspan="3">: <input type="checkbox" name="mn" value="ya"> ya / <input type="checkbox" name="mn" value="tidak"> tidak</td>
    </tr>

    <tr>
      <td>12</td>
      <td>Pernah Bekerja</td>
      <td colspan="3">: <input type="checkbox" name="pb" value="pernah"> ya / <input type="checkbox" name="pb" value="tidak"> tidak</td>
    </tr>

    <tr>
      <td>13</td>
      <td>Bila pernah, bekerja dimana</td>
      <td colspan="3">: <input type="text" name="bpbd_k1"></td>
    </tr>

    



    <tr>
      <td>14</td>
      <td>Gajih / Perbulan</td>
      <td colspan="3">: <input type="text" name="bpbd_k3"></td>
    </tr>


  </table>
<!-- akhir no 1 -->
<!-- akhir no 1 -->
			</div>

        </form>             
        <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="width: 100px; background-color: #F5613B">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px; background-color: #058C97">Batal</button>
        </div>        
			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
