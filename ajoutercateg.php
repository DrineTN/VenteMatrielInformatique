<?php
require 'connexion.php';
$lib = $_POST['libelle'];
try {
  $req = $cnx->prepare("INSERT INTO categorie(libcateg) VALUES ('$lib')");
  $req->execute();
  $res = $req;
  header("location:categories.php");
} catch (Exception $e) {
  echo $e;
}


 ?>
