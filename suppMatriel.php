<?php
require 'connexion.php';
$m = $_GET['x'];
try {
$req = $cnx->prepare("DELETE FROM matriel WHERE matriel.idmat =$m");
$req->execute();
$res = $req;
header("location:gestionMatriel.php");
} catch (Exception $e) {
    echo $e;
}

 ?>
