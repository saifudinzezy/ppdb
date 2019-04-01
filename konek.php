<?php

$server   = 'localhost';
$user     = 'root';
$pass     = '';
$database = 'ppdb';


$conn = mysql_connect($server,$user,$pass) or die;
$db   = mysql_select_db($database);

 ?>
