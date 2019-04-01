<?php

$tanggal = $_POST['tanggal'];
$waktu   = $_POST['waktu'];
$id      = $_POST['id'];
$petugas = $_POST['petugas'];

include '../oop_konek.php';
$jadwal = new database();
$jadwal->str_query("UPDATE infoppdb SET waktu = '$waktu' , tanggal = '$tanggal' , petugas = '$petugas' WHERE id = 0");

header("location:index.php");


 ?>
