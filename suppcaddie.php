<?php
session_start();
$id = $_GET['x'];
$tmp= array();
$tmp['id'] = array();
$tmp['libmat'] = array();
$tmp['quantite'] = array();
$tmp['prix'] = array();

for ($i=0; $i <count($_SESSION['panier']['id']) ; $i++) {
  if ($_SESSION['panier']['id'][$i]!==$id) {
  array_push($tmp['id'],$_SESSION['panier']['id'][$i]);
  array_push($tmp['libmat'],$_SESSION['panier']['libmat'][$i]);
  array_push($tmp['quantite'],$_SESSION['panier']['quantite'][$i]);
  array_push($tmp['prix'],$_SESSION['panier']['prix'][$i]);

}
}
$_SESSION['panier'] = $tmp;
unset($tmp);
header("Location:panier.php");
 ?>
