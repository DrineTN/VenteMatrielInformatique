<?php
session_start();
$servername  = "localhost";
$username = "root";
$password = "";
try {
    $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $c = $_GET['x'];
    $req = $cnx->prepare("delete from client where idclient =$c");
    $req->execute();
    $res = $req;
    header("location:gestionClient.php");
}  catch(Exception $e){
    echo $e;
  }
 ?>
