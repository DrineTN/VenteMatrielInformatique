<?php
$servername  = "localhost";
$username = "root";
$password = "";
try {
    $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}  catch(Exception $e){
    echo $e;
  }
 ?>
