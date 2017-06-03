<?php
require 'connexion.php';
$idcom = $_GET['x'];
  $requpdate =$cnx->prepare("update commande set etatcom = 'livree' where nocom =$idcom");
  $requpdate->execute();
  $n = $requpdate;
  header("location:gestionCommande.php");
 ?>
