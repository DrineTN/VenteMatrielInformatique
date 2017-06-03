<?php
session_start();
require 'connexion.php';
$id = $_SESSION['user'][0];
for ($i=0; $i <count($_SESSION['panier']['id']) ; $i++) {
  # code...
  $idm = $_SESSION['panier']['id'][$i];
  $q = $_SESSION['panier']['quantite'][$i];
  $req3 = $cnx->prepare("select qte_stock from matriel where idmat = $idm");
  $req3->execute();
  $res = $req3;
  $ligne = $res->fetch(PDO::FETCH_ASSOC)['qte_stock'];
  if ($ligne-$q<0) {
    $msq = "Quantite insuffisante pour le produit".$idm;
    die($msq);
  }

}
try {
    $req = $cnx->prepare("INSERT INTO commande (idclient) VALUES ($id)");
    $req->execute();
    $requeteSelect = $cnx->prepare("SELECT LAST_INSERT_ID() as nb FROM commande");
    $requeteSelect->execute();
    $res = $requeteSelect;
    $n = $res->fetch(PDO::FETCH_ASSOC)['nb'];
    for ($i=0; $i <count($_SESSION['panier']['id']) ; $i++) {
      # code...
      $idmat = $_SESSION['panier']['id'][$i];
      $qte = $_SESSION['panier']['quantite'][$i];
      $ligne = $res->fetch(PDO::FETCH_ASSOC)['qte_stock'];
      $req2 = $cnx->prepare("update matriel set qte_stock = qte_stock - $qte where idmat = $idmat");
      $req2->execute();
      $req = $cnx->prepare("INSERT INTO ligne_commande(nocom,idmat,qtecomm) VALUES ($n, $idmat, $qte)");
      $req->execute();
      header("Location:mescommande.php");
      }
} catch (Exception $e) {
  echo $e;
}


 ?>
