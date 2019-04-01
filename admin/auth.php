<?php
session_start();
include "../konek.php";



$q  = mysql_query("select * from admin");
$hq = mysql_fetch_array($q);


if ($hq['username'] == $_POST['user'] and $hq['password'] == $_POST['pass']) {
	$_SESSION[user] = $hq['nama'];
	header("location: index.php");
} else {
?>
	<script language="JavaScript">
	alert('Username atau Password tidak sesuai !');
	document.location='login.php';
	</script>
	<?php
}
?>
