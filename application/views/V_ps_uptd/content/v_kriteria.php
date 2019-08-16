
<style type="text/css">
	tr, td,th{
		padding: 10px;
	}
	.containeredit{
		padding: 20px;
	}
	.modal-dialog{
		width:93%;
	}
</style>


<div class="containeredit">

<h1>Kriteria Penerimaan</h1><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Input perhitungan
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Input Perhitungan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/x/x">
    <div class="form-group"> 
      <div class="modal-body" style="overflow: scroll;">
      	<!-- hasil sebelum normalisasi -->
        <table border="1">
			<tr>
				<td></td>
				<th colspan="1">Usia</th>
				<th colspan="1">Tanggungan orang tua</th>
				<th colspan="1">Pendidikan terakhir</th>
				<th colspan="1">Pekerjaan orang tua</th>
				<th colspan="1">Penghasilan orang tua</th>
				<th colspan="1">Kesehatan</th>
				<th colspan="1">Kondisi Rumah</th>
				<th colspan="1">Kendaraan</th>
				<th colspan="1">Status</th>
			</tr>

			<tr>

				<style type="text/css">
									.inputt{
										width: 30px;
									}
								</style>

				<th>Usia</th>
				<td><input type="number" name="Usia_Usia_bk" class="inputt"></td>
				<td><input type="number" name="Tanggungan_Usia_b" class="inputt"></td>
				<td><input type="number" name="Pendidikan_Usia_b" class="inputt"></td>
				<td><input type="number" name="Pekerjaan_Usia_b" class="inputt"></td>
				<td><input type="number" name="Penghasilan_Usia_b" class="inputt"></td>
				<td><input type="number" name="Kesehatan_Usia_b" class="inputt"></td>
				<td><input type="number" name="Kondisi_Usia_b" class="inputt"></td>
				<td><input type="number" name="Kendaraan_Usia_b" class="inputt"></td>
				<td><input type="number" name="Status_Usia_b" class="inputt"></td>

			</tr>

			<tr>
				<th>Tanggungan orang tua</th>
				<td><input type="number" name="Tanggungan_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Pendidikan terakhir</th>
				<td><input type="number" name="Pendidikan_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Pekerjaan orang tua</th>
				<td><input type="number" name="Pekerjaan_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Penghasilan orang tua</th>
				<td><input type="number" name="Penghasilan_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Kesehatan</th>
				<td><input type="number" name="Kesehatan_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Kondisi Rumah</th>
				<td><input type="number" name="Kondisi_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Kendaraan</th>
				<td><input type="number" name="Kendaraan_Usia_k" class="inputt"></td>

			</tr>

			<tr>
				<th>Status</th>
				<td><input type="number" name="Status_Usia_k" class="inputt"></td>

			</tr>
		</table>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Hitung</button>
      </div>

    </div>
</form> 
    </div>
  </div>
</div>

<!-- akhir modal -->



<!-- hasil sebelum normlisasi -->
<h1>hasil sebelum normlisasi</h1>
<table border="1">
	<tr>
		<td></td>
		<th>Usia</th>
		<th>Tanggungan orang tua</th>
		<th>Pendidikan terakhir</th>
		<th>Pekerjaan orang tua</th>
		<th>Penghasilan orang tua</th>
		<th>Kesehatan</th>
		<th>Kondisi Rumah</th>
		<th>Kendaraan</th>
		<th>Status</th>
		<th>Rata - rata</th>
	</tr>

	<tr>
		<th>Usia</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Usia_1; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Usia_1; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Tanggungan orang tua</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Tanggungan_2; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Tanggungan_2; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Pendidikan terakhir</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Pendidikan_3; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Pendidikan_3; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Pekerjaan orang tua</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Pekerjaan_4; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Pekerjaan_4; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Penghasilan orang tua</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Penghasilan_5; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Penghasilan_5; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Kesehatan</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Kesehatan_6; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Kesehatan_6; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Kondisi rumah</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Kondisi_7; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Kondisi_7; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Kendaraan</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Kendaraan_8; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Kendaraan_8; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Status</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Status_9; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Status_9; ?>
                    <?php }?></td>
	</tr>
	<tr>
		<th>Hasil</th>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Usia_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Tanggungan_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pendidikan_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Pekerjaan_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Penghasilan_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kesehatan_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kondisi_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Kendaraan_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Status_Rata_10; ?>
                    <?php }?></td>
		<td><?php foreach($getkriteria as $r){?>
                    <?php echo $r->Rata_Rata_10; ?>
                    <?php }?></td>
	</tr>
</table><br><br><br>
<!-- akhir hasil sebelum normlisasi -->
<?php 
	$b=$getkriteria_normalisasi->row_array();
?>
<!-- hasil setelah normlisasi -->
<h1>normalisasi kriteri / eigen</h1>
<h1>hasil setelah normlisasi</h1>
<table border="1">
	<tr>
		<td></td>
		<th>Usia</th>
		<th>Tanggungan orang tua</th>
		<th>Pendidikan terakhir</th>
		<th>Pekerjaan orang tua</th>
		<th>Penghasilan orang tua</th>
		<th>Kesehatan</th>
		<th>Kondisi Rumah</th>
		<th>Kendaraan</th>
		<th>Status</th>
		<th>Rata - rata</th>
	</tr>
	<tr>
		<th>Usia</th>
		<td><?php echo $b['Usia_Usia_1s'];?></td>
		<td><?php echo $b['Tanggungan_Usia_1s'];?></td>
		<td><?php echo $b['Pendidikan_Usia_1s'];?></td>
		<td><?php echo $b['Pekerjaan_Usia_1s'];?></td>
		<td><?php echo $b['Penghasilan_Usia_1s'];?></td>
		<td><?php echo $b['Kesehatan_Usia_1s'];?></td>
		<td><?php echo $b['Kondisi_Usia_1s'];?></td>
		<td><?php echo $b['Kendaraan_Usia_1s'];?></td>
		<td><?php echo $b['Status_Usia_1s'];?></td>
		<td><?php echo $b['Rata_Usia_1s'];?></td>
	</tr>
	<tr>
		<th>Tanggungan orang tua</th>
		<td><?php echo $b['Usia_Tanggungan_2s'];?></td>
		<td><?php echo $b['Tanggungan_Tanggungan_2s'];?></td>
		<td><?php echo $b['Pendidikan_Tanggungan_2s'];?></td>
		<td><?php echo $b['Pekerjaan_Tanggungan_2s'];?></td>
		<td><?php echo $b['Penghasilan_Tanggungan_2s'];?></td>
		<td><?php echo $b['Kesehatan_Tanggungan_2s'];?></td>
		<td><?php echo $b['Kondisi_Tanggungan_2s'];?></td>
		<td><?php echo $b['Kendaraan_Tanggungan_2s'];?></td>
		<td><?php echo $b['Status_Tanggungan_2s'];?></td>
		<td><?php echo $b['Rata_Tanggungan_2s'];?></td>
	</tr>
	<tr>
		<th>Pendidikan terakhir</th>
		<td><?php echo $b['Usia_Pendidikan_3s'];?></td>
		<td><?php echo $b['Tanggungan_Pendidikan_3s'];?></td>
		<td><?php echo $b['Pendidikan_Pendidikan_3s'];?></td>
		<td><?php echo $b['Pekerjaan_Pendidikan_3s'];?></td>
		<td><?php echo $b['Penghasilan_Pendidikan_3s'];?></td>
		<td><?php echo $b['Kesehatan_Pendidikan_3s'];?></td>
		<td><?php echo $b['Kondisi_Pendidikan_3s'];?></td>
		<td><?php echo $b['Kendaraan_Pendidikan_3s'];?></td>
		<td><?php echo $b['Status_Pendidikan_3s'];?></td>
		<td><?php echo $b['Rata_Pendidikan_3s'];?></td>
	</tr>
	<tr>
		<th>Pekerjaan orang tua</th>
		<td><?php echo $b['Usia_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Tanggungan_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Pendidikan_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Pekerjaan_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Penghasilan_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Kesehatan_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Kondisi_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Kendaraan_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Status_Pekerjaan_4s'];?></td>
		<td><?php echo $b['Rata_Pekerjaan_4s'];?></td>
	</tr>
	<tr>
		<th>Penghasilan orang tua</th>
		<td><?php echo $b['Usia_Penghasilan_5s'];?></td>
		<td><?php echo $b['Tanggungan_Penghasilan_5s'];?></td>
		<td><?php echo $b['Pendidikan_Penghasilan_5s'];?></td>
		<td><?php echo $b['Pekerjaan_Penghasilan_5s'];?></td>
		<td><?php echo $b['Penghasilan_Penghasilan_5s'];?></td>
		<td><?php echo $b['Kesehatan_Penghasilan_5s'];?></td>
		<td><?php echo $b['Kondisi_Penghasilan_5s'];?></td>
		<td><?php echo $b['Kendaraan_Penghasilan_5s'];?></td>
		<td><?php echo $b['Status_Penghasilan_5s'];?></td>
		<td><?php echo $b['Rata_Penghasilan_5s'];?></td>
	</tr>
	<tr>
		<th>Kesehatan</th>
		<td><?php echo $b['Usia_Kesehatan_6s'];?></td>
		<td><?php echo $b['Tanggungan_Kesehatan_6s'];?></td>
		<td><?php echo $b['Pendidikan_Kesehatan_6s'];?></td>
		<td><?php echo $b['Pekerjaan_Kesehatan_6s'];?></td>
		<td><?php echo $b['Penghasilan_Kesehatan_6s'];?></td>
		<td><?php echo $b['Kesehatan_Kesehatan_6s'];?></td>
		<td><?php echo $b['Kondisi_Kesehatan_6s'];?></td>
		<td><?php echo $b['Kendaraan_Kesehatan_6s'];?></td>
		<td><?php echo $b['Status_Kesehatan_6s'];?></td>
		<td><?php echo $b['Rata_Kesehatan_6s'];?></td>
	</tr>
	<tr>
		<th>Kondisi rumah</th>
		<td><?php echo $b['Usia_Kondisi_7s'];?></td>
		<td><?php echo $b['Tanggungan_Kondisi_7s'];?></td>
		<td><?php echo $b['Pendidikan_Kondisi_7s'];?></td>
		<td><?php echo $b['Pekerjaan_Kondisi_7s'];?></td>
		<td><?php echo $b['Penghasilan_Kondisi_7s'];?></td>
		<td><?php echo $b['Kesehatan_Kondisi_7s'];?></td>
		<td><?php echo $b['Kondisi_Kondisi_7s'];?></td>
		<td><?php echo $b['Kendaraan_Kondisi_7s'];?></td>
		<td><?php echo $b['Status_Kondisi_7s'];?></td>
		<td><?php echo $b['Rata_Kondisi_7s'];?></td>
	</tr>
	<tr>
		<th>Kendaraan</th>
		<td><?php echo $b['Usia_Kendaraan_8s'];?></td>
		<td><?php echo $b['Tanggungan_Kendaraan_8s'];?></td>
		<td><?php echo $b['Pendidikan_Kendaraan_8s'];?></td>
		<td><?php echo $b['Pekerjaan_Kendaraan_8s'];?></td>
		<td><?php echo $b['Penghasilan_Kendaraan_8s'];?></td>
		<td><?php echo $b['Kesehatan_Kendaraan_8s'];?></td>
		<td><?php echo $b['Kondisi_Kendaraan_8s'];?></td>
		<td><?php echo $b['Kendaraan_Kendaraan_8s'];?></td>
		<td><?php echo $b['Status_Kendaraan_8s'];?></td>
		<td><?php echo $b['Rata_Kendaraan_8s'];?></td>
	</tr>
	<tr>
		<th>Status</th>
		<td><?php echo $b['Usia_Status_9s'];?></td>
		<td><?php echo $b['Tanggungan_Status_9s'];?></td>
		<td><?php echo $b['Pendidikan_Status_9s'];?></td>
		<td><?php echo $b['Pekerjaan_Status_9s'];?></td>
		<td><?php echo $b['Penghasilan_Status_9s'];?></td>
		<td><?php echo $b['Kesehatan_Status_9s'];?></td>
		<td><?php echo $b['Kondisi_Status_9s'];?></td>
		<td><?php echo $b['Kendaraan_Status_9s'];?></td>
		<td><?php echo $b['Status_Status_9s'];?></td>
		<td><?php echo $b['Rata_Status_9s'];?></td>
	</tr>
	<tr>
		<th>Hasil</th>
		<td><?php echo $b['Usia_Rata_10s'];?></td>
		<td><?php echo $b['Tanggungan_Rata_10s'];?></td>
		<td><?php echo $b['Pendidikan_Rata_10s'];?></td>
		<td><?php echo $b['Pekerjaan_Rata_10s'];?></td>
		<td><?php echo $b['Penghasilan_Rata_10s'];?></td>
		<td><?php echo $b['Kesehatan_Rata_10s'];?></td>
		<td><?php echo $b['Kondisi_Rata_10s'];?></td>
		<td><?php echo $b['Kendaraan_Rata_10s'];?></td>
		<td><?php echo $b['Status_Rata_10s'];?></td>
		<td><?php echo $b['Rata_Rata_10s'];?></td>
	</tr>
</table>
<!-- akhir hasil setelah normlisasi -->

</div>