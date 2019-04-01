<?php

class database {
  Private $conn;
  Private $server;
  Private $username;
  Private $password;
  Private $db;

  Private $query;
  Private $sql;
  Private $data;
  Private $hitung;

  function test(){
    echo "Testing";
  }


  function __construct(){

    $this->server   = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->db       = "ppdb";

    mysql_connect($this->server,$this->username,$this->password);
    mysql_select_db($this->db);
  }

  function str_query($s){
    $this->sql    = $s;
    $this->query  = mysql_query($this->sql);
  }

  function fetch_object(){
    return $this->data = mysql_fetch_object($this->query);
  }

  function hitung(){
    return $this->hitung = mysql_num_rows($this->query);
  }
}





 ?>
