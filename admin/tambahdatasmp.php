<?php
include '../oop_konek.php';
$AddSmp = $_POST['NamaSmp'];
if (!empty($AddSmp)) {
  $sql = new database();
  $sql->str_query("INSERT INTO dataasalsekolah (NamaSmp) VALUES ('$AddSmp')");
  header("location:index.php");
} else {
  header("location:index.php");
}



 ?>
