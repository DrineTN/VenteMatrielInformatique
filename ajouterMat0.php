<?php
$servername  = "localhost";
$username = "root";
$password = "";
try {
    $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_POST['id'];
    $lib= $_POST['lib'];
    $prix = $_POST['prx'];
    $qte = $_POST['qtes'];
    $marque = $_POST['marque'];
 catch (Exception $e) {
   echo $e->;
}


 ?>
