<?php
include "../konek.php";

if (isset($_GET['jur'])) {
	$jur = $_GET['jur'];
	$s   = mysql_query("SELECT * FROM datadiri WHERE Jurusan = '$jur' AND status = 'TERDAFTAR'");

	while ($hsl = mysql_fetch_array($s)) {
		echo $hsl['Nama']."<br>";
	}

} else {
	echo "Tidak dapat diakses";
}


?>
