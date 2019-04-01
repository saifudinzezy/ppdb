<div class="row">
	<div class="col-md-4">
		<form method="GET" action="./pdf/print.php">
			<div class="form-group">
			  <label class="control-label">Masukan No. Peserta</label>
			  <div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-print"></i></span>
			    <input class="form-control" type="text" name="nopen" placeholder="XX-XXX">
			    <span class="input-group-btn">
			      <input class="btn btn-default" type="submit" name="submit" value="cetak">
			    </span>
			  </div>
			</div>
		</form>
	</div>

</div>

<div class="row">

<div >
<div class="col-md-8">
	<table class="table table-bordered">
		<tr>
			<th colspan="3" class="btn-info" align="center">Kartu Yang Belum Dicetak</th>
		</tr>
		<tr>
			<th>No. Pendf.</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	<?php
	include "../konek.php";

	$s = mysql_query("SELECT * FROM datadiri INNER JOIN cetak ON datadiri.NoPDF = Cetak.NoPDF WHERE StatusCetak = 1");
	while ($t = mysql_fetch_array($s)) {
		echo "
		<tr>
			<td>".$t['NoPDF']."</td>
			<td>".$t['Nama']."</td>
			<td><a href='./pdf/print.php?nopen=".$t['NoPDF']."'>Cetak</a></td>
		</tr>

		";

	}
	?>



	</table>
</div>
</div>
</div>
