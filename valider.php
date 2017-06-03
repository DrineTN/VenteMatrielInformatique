  <?php
$servername = "localhost";
$username = "root";
$password = "";
//require("cnx.php");
$log = $_POST['users'];
$pass = $_POST['pass'];
$pass_crip = md5($pass);
try {
  $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
  $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $req = $cnx->prepare("SELECT * FROM client where emailClient='$log' and motpass='$pass'");
  $req->execute();
  $res = $req;
  $n = $res->fetch(PDO::FETCH_ASSOC)['niveau'];
  $req->execute();
  $idclient = $res->fetch(PDO::FETCH_ASSOC)['idclient'];
  if ($n==1) {
    session_start();
    $_SESSION['niv'] = $n;
    header("location:dashbord.php");
  }
  elseif ($n==2) {
    session_start();
    $_SESSION['niv'] = $n;
    $_SESSION['user'] = $idclient;
    $_SESSION['panier'] = array();
    $_SESSION['panier']['id'] = array();
    $_SESSION['panier']['libmat'] = array();
    $_SESSION['panier']['quantite'] = array();
    $_SESSION['panier']['prix'] = array();
    header("location:index.php");
  }
  else {
    header("location:login.php");
  }

} catch (Exception $e) {
  echo "Connection failed: " . $e->getMessage();
}

 ?>
