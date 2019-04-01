


<div class="x-content">


<table class="table table-bordered">
<tr align="center" style="background: lavender;">
	<th>No. Pendf.</th>
	<th>Nama</th>
	<th>Nisn</th>
	<th>TTL</th>
	<th>Usia</th>
	<th>Jk</th>
	<th>Sekolah Asal</th>
	<th>Jurusan</th>
	<th colspan="4" align="center">Aksi</th>

</tr>
<?php



include "../konek.php";
$stri = mysql_query("select * from datadiri WHERE status = 'TERDAFTAR' ORDER By Urut DESC");

while ($hsl = mysql_fetch_array($stri)) {

	$Nopend = $hsl['NoPDF'];
	$stri1 = mysql_query("select * from datalampiran WHERE NoPDF = '$Nopend'");
	$cek1  = mysql_num_rows($stri1);
	if ($cek1 == 0) {
		echo "<tr style='background:#ffb4b4;'>";
	} else {
		echo "<tr>";
	}

	echo "<td>".$Nopend."</td>";
	echo "<td>".$hsl['Nama']."</td>";
	echo "<td>".$hsl['NISN']."</td>";
	echo "<td>".$hsl['TmptTanggalLahir']."</td>";
	echo "<td>".$hsl['USIA']."</td>";
	echo "<td>".$hsl['JenisKelamin']."</td>";
	echo "<td>".$hsl['AsalSekolah']."</td>";
	echo "<td>".$hsl['Jurusan']."</td>";
	echo "<td> <a href='index.php?page=5&id=".$hsl['NoPDF']."'>Edit</a> </td>";
	echo "<td> <a href='index.php?page=5&lamp=".$hsl['NoPDF']."'>Lmpirn</a> </td>";
	echo "<td> <a class='konfirmasi' href='cabut_data.php?id=".$hsl['NoPDF']."'>Cabut</a> </td>";
	echo "<td> <a class='konfirmasi1' href='hapus.data.pendaftar.php?id=".$hsl['NoPDF']."'>Hapus</a> </td>";
	echo "</tr>";
 }

 ?>
 <script type="text/javascript">
     var elems = document.getElementsByClassName('konfirmasi');
     var confirmIt = function (e) {
         if (!confirm('Yakin mau pencabutan berkas ?')) e.preventDefault();
     };
     for (var i = 0, l = elems.length; i < l; i++) {
         elems[i].addEventListener('click', confirmIt, false);
     }

		 var elems = document.getElementsByClassName('konfirmasi1');
     var confirmIt = function (e) {
         if (!confirm('Yakin mau menghapus berkas secara permanent?')) e.preventDefault();
     };
     for (var i = 0, l = elems.length; i < l; i++) {
         elems[i].addEventListener('click', confirmIt, false);
     }
 </script>

</table>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Edit</h4>
        </div>
        <div class="modal-body">
          <form role="form">
          <table class="table table-bordered">
          	<tr><td>No</td><td><input type="text" name=""></td></tr>
          </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
