<h2>REKAP DATA</h2>
<ul class="nav nav-pills">
<?php
include "../konek.php";

$s = mysql_query("SELECT Jurusan,COUNT(Jurusan) as jml FROM datadiri GROUP by Jurusan");
	while ($hsl = mysql_fetch_array($s)) {
  		echo "<li ><a href='./aksi/data_jur.php?jur=".$hsl['Jurusan']."'>".$hsl['Jurusan']."<span class='badge'>".$hsl['jml']."</span></a></li>";

	}
$t = mysql_query("SELECT * FROM datadiri");
$q = mysql_num_rows($t);
echo "<li class='active'><a href=''>Total<span class='badge'>".$q."</span></a></li>";


?>
</ul>
