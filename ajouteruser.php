<?php
  $cin = $_POST['cin'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $adress = $_POST['adress'];
  $login = $_POST['login'];
  $pass  = $_POST['pass'];
require 'connexion.php';
$req = $cnx->prepare("select emailClient,cin from client");
$req->execute();
$res = $req;
while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
      $x = $ligne['emailClient'];

      $z = $ligne['cin'];
      if ($x == $email ){
        die("Email deja exist");
      }
      if ($z == $cin) {
        # code...
        die("Cin deja exist");
      }
}
$req = $cnx->prepare("INSERT INTO client(nomClient, emailClient, telclient, adressclient, login, motpass, cin) VALUES ('$nom' ,'$email','$tel','$adress','$login','$pass','$cin')");
$req->execute();
$requeteSelect = $cnx->prepare("SELECT * FROM client WHERE cin =$cin");

$requeteSelect->execute();
$res = $requeteSelect;
$ligne = $res->fetch(PDO::FETCH_ASSOC);
session_start();
$_SESSION['niv'] =$ligne['niveau'] ;
$_SESSION['user'] = $ligne['idclient'];
$_SESSION['panier'] = array();
$_SESSION['panier']['id'] = array();
$_SESSION['panier']['libmat'] = array();
$_SESSION['panier']['quantite'] = array();
$_SESSION['panier']['prix'] = array();
header("location:index.php");
 ?>
