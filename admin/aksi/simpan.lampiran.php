<?php

include '../../oop_konek.php';
$btn    = $_POST['kirim'];
$NoPDF  = $_POST['NoPDF'];
$STTB   = $_POST['STTB'];
$SKHUN  = $_POST['SKHUN'];
$IJAZAH = $_POST['IJAZAH'];
$FOTO   = $_POST['FOTO'];
$rapot     = $_POST['rapot'];
$aktaLahir = $_POST['aktaLahir'];
$kk 	   = $_POST['kk'];

$spn = new database();
if ($btn == 'simpan') {
  $spn->str_query("INSERT INTO datalampiran(NoPDF, STTB, SKHUN, rapot, aktaLahir, kk, IJAZAH, FOTO) VALUES ('$NoPDF', '$STTB', '$SKHUN', '$rapot', '$aktaLahir', '$kk', '$IJAZAH', '$FOTO')");
  header("location:../index.php?page=5&lamp=".$NoPDF);
} else {
  $spn->str_query("UPDATE datalampiran SET STTB='$STTB',SKHUN='$SKHUN',IJAZAH='$IJAZAH',FOTO='$FOTO', rapot='$rapot', aktaLahir='$aktaLahir', kk='$kk' WHERE NoPDF = '$NoPDF'");
  header("location:../index.php?page=5&lamp=".$NoPDF);

}

 ?>
