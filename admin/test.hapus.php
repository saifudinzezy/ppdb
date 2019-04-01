<?php

include '../oop_konek.php';

$link = new database();
$link->testing();
$link->str_query("SELECT * FROM datadiri");
$data = $link->fetch_object();
echo $data->Nama; 


 ?>
