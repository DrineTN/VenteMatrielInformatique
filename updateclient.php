<?php
require 'connexion.php';
  $cin = $_POST['cin'];
  $nom = $_POST['nom'];
  $tel = $_POST['tel'];
  $adr = $_POST['adr'];
  $log  = $_POST['login'];
  $pass = $_POST['pass'];
  $etat = $_POST['sel1'];
  $remise = $_POST['remise'];
  $req1 = $cnx->prepare("UPDATE client SET nomClient='$nom',telclient='$tel',adressclient='$adr',login='$log',motpass='$pass',etat='$etat', remise=$remise WHERE cin = '$cin'");
  $req1->execute();
  $res1 = $req1;
  header("location:gestionClient.php");
 ?>
