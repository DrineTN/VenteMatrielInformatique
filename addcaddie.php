<?php
$id = $_POST['idmat'];
$lib = $_POST['libmat'];
$prix = $_POST['prix'];
$qte = $_POST['qte'];
session_start();
  if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
    $_SESSION['panier']['id'] = array();
    $_SESSION['panier']['libmat'] = array();
    $_SESSION['panier']['quantite'] = array();
    $_SESSION['panier']['prix'] = array();
  }
  else {
    //si le produit existe deja on ajoute seulment la quantite
    $positionProduit = array_search($id,$_SESSION['panier']['id']);
    if ($positionProduit!== false) {
      $_SESSION['panier']['quantite'][$positionProduit] += $qte;
    }
    else {
      //si non on ajouter le produit
      array_push($_SESSION['panier']['id'],$id);
      array_push($_SESSION['panier']['libmat'],$lib);
      array_push($_SESSION['panier']['quantite'],$qte);
      array_push($_SESSION['panier']['prix'],$prix);
    }
  }
header("Location:index.php?");//afficher le panier
?>
