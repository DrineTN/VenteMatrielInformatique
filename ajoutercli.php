<?php
$servername  = "localhost";
$username = "root";
$password = "";
try {
    $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $adress = $_POST['adr'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $cin = $_POST['cin'];
    $req = $cnx->prepare("insert into client(nomClient,emailClient,adressClient,login,motpass,telclient,cin) values('$nom','$email', '$adress', '$login','$password','$tel', '$cin')");
    $req->execute();
    $res = $req;
    header("location:gestionClient.php");
}  catch(Exception $e){
    echo $e;
  }
 ?>
