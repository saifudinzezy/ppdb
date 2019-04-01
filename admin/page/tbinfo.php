
<div class="col-md-12">
	<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="glyphicon glyphicon-flag"> </i>	INFORMASI
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<form class="" action="ganti.jadwal.php" method="post">

						<?php
							$ff = new database();
							$ff->str_query("SELECT * FROM infoppdb");
							while ($resultff = $ff->fetch_object()) {?>
							<table>
								<tr>
									<td><b>Tanggal Test</b></td>
									<td><b>Waktu Test</b></td>
								</tr>
								<tr>
									<td><input id="datepicker" class="jarak-enter" type="text" name="tanggal" value="<?php echo $resultff->tanggal; ?>"></td>
									<td><input id="datepicker1" class="jarak-enter" type="text" name="waktu" value="<?php echo $resultff->waktu; ?>"</td>
								</tr>
                <tr>
									<td><b>Nama Petugas Harian</b></td>
									<td></td>
								</tr>
                <tr>
									<td><input class="jarak-enter" type="text" name="petugas" value="<?php echo $resultff->petugas; ?>"></td>
                  <td></td>
                </tr>
								<tr>
									<td><input type="submit" class="btn btn-success" name="" value="Ubah Jadwal"></td>
									<td></td>
								</tr>
                <?php } ?>
							</table>


					 </form>
					</div>
					<div class="col-md-6">
						<b>PROSEDUR PENDAFTARAN</b><br>
						1. Calon siswa mengisi formulir via online <br>
						2. Petugas mencetak formulir pada menu cetak <br>
						3. ...
					</div>
				</div>
			</div>
	</div> <!-- div row -->
<div class="x-content1">

	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				Database Asal SMP / MTS Sederajat
			</div>
			<div class="panel-body">
				<div class="col-md-4">
					<?php
						$sql = new database();
						$sql->str_query("SELECT * FROM dataasalsekolah ORDER by NamaSmp ASC LIMIT 30");
						while ($smp1 = $sql->fetch_object()) {
							echo "<li>".$smp1->NamaSmp."</li>";
						}
					 ?>
				</div>
				<div class="col-md-4">
					<?php
						$sql->str_query("SELECT * FROM dataasalsekolah ORDER by NamaSmp ASC LIMIT 31,30");
						while ($smp2 = $sql->fetch_object()) {
							echo "<li>".$smp2->NamaSmp."</li>";
						}
					 ?>
				</div>
				<div class="col-md-4">
					<?php
						$sql->str_query("SELECT * FROM dataasalsekolah ORDER by NamaSmp ASC LIMIT 61,30");
						while ($smp3 = $sql->fetch_object()) {
							echo "<li>".$smp3->NamaSmp."</li>";
						}
					 ?>
					 <br>
					 <form class="" action="tambahdatasmp.php" method="post">
						 tambahkan data :
					 		<input type="text" name="NamaSmp" value="">
							<button type="submit" name="tambah">Tambah</button>
					 </form>
				</div>
			</div>
		</div>
</div>
	</div>
</div>
