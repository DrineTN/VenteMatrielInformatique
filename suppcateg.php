<?php
require 'connexion.php';
$l = $_GET['x'];
try {
  $req = $cnx->prepare("DELETE FROM matriel WHERE matriel.categoriemat = $l");
  $req->execute();
  $req = $cnx->prepare("DELETE FROM categorie WHERE categorie.idcateg = $l");
  $req->execute();
  header("location:categories.php");
} catch (Exception $e) {

}


 ?>
