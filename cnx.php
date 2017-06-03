<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
  $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
  $query = "select * from matriel";
  $result = $cnx->query($query);
} catch (Exception $e) {
  echo "Connection failed: " . $e->getMessage();
}

/*

$id = mysql_connect("localhost","root","") or die(mysql_error);
$id_bd = mysql_select_db("venteinfo") or die(mysql_error);

$result = mysql_query($query);*/
 ?>
