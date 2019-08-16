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
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Tanggungan orang tua</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Pendidikan terakhir</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Pekerjaan orang tua</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Penghasilan orang tua</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Kesehatan</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Kondisi Rumah</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Kendaraan</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>

			<tr>
				<th>Status</th>
				<td><input type="number" name="" class="inputt"></td>

			</tr>
		</table>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Hitung</button>
      </div>
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
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Tanggungan orang tua</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Pendidikan terakhir</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Pekerjaan orang tua</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Penghasilan orang tua</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Kesehatan</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Kondisi rumah</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Kendaraan</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>0,5</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Status</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Hasil</th>
		<th>1</th>
		<th>0,25</th>
		<th>0,3</th>
		<th>0,5</th>
		<th>0,5</th>
		<th>2</th>
		<th>2</th>
		<th>0,25</th>
		<th>0,5</th>
		<th>2</th>
	</tr>
</table><br><br><br>
<!-- akhir hasil sebelum normlisasi -->

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
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Tanggungan orang tua</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Pendidikan terakhir</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Pekerjaan orang tua</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Penghasilan orang tua</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Kesehatan</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Kondisi rumah</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Kendaraan</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>0,5</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Status</th>
		<td>1</td>
		<td>0,25</td>
		<td>0,3</td>
		<td>0,3</td>
		<td>0,5</td>
		<td>2</td>
		<td>2</td>
		<td>0,25</td>
		<td>0,5</td>
		<td>2</td>
	</tr>
	<tr>
		<th>Hasil</th>
		<th>1</th>
		<th>0,25</th>
		<th>0,3</th>
		<th>0,5</th>
		<th>0,5</th>
		<th>2</th>
		<th>2</th>
		<th>0,25</th>
		<th>0,5</th>
		<th>2</th>
	</tr>
</table>
<!-- akhir hasil setelah normlisasi -->

</div>