<?php
include "../konek.php";

$id = $_GET['id'];
if (!empty($id)) {
  $exc = mysql_query("DELETE FROM datadiri WHERE NoPDF = '$id'");
  $exc1 = mysql_query("DELETE FROM dataortu WHERE NoPDF = '$id'");
  $exc2 = mysql_query("DELETE FROM datanilai WHERE NoPDF = '$id'");
  $exc3 = mysql_query("DELETE FROM cetak WHERE NoPDF = '$id'");
  $exc4 = mysql_query("DELETE FROM datates WHERE NoPDF = '$id'");
  header("location:index.php?page=2");
}
?>
