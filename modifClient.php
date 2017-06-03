<?php
$servername  = "localhost";
$username = "root";
$password = "";
$c = $_GET['y'];
try {
    $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $num = $_POST['num'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adress = $_POST['adr'];
    $email = $_POST['email'];
    $req = $cnx->prepare("select * from client where numcl = $c");

    $req->execute();
    $res = $req;
    $ligne = $res->fetch(PDO::FETCH_ASSOC);

 ?>
