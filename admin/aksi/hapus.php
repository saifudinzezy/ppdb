<?php
include '../../oop_konek.php';

$hapus = new database();

$hapus->str_query("TRUNCATE TABLE cetak");
$hapus->str_query("TRUNCATE TABLE datadiri");
$hapus->str_query("TRUNCATE TABLE datanilai");
$hapus->str_query("TRUNCATE TABLE dataortu");
$hapus->str_query("TRUNCATE TABLE datates");


 ?>
