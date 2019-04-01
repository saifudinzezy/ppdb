<?php
include "../konek.php";

$id = $_GET['id'];
if (!empty($id)) {
  $exc = mysql_query("UPDATE datadiri SET status = 'cabut' WHERE NoPDF = '$id'");
  header("location:index.php?page=2");
}
?>
