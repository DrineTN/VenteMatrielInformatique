<?php session_start();
if(isset($_GET['x']))
    {$msg = $_GET['x']; echo($msg);}

?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shop Center</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="mescommande.php">Mes Commandes</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <?php
                    require 'connexion.php';
                    $idc = $_SESSION['user'][0];
                    $req = $cnx->prepare("select * FROM client where idclient =$idc");
                       $req->execute();
                       $res = $req;
                       $ligne = $res->fetch(PDO::FETCH_ASSOC)['emailClient'];
                       ?>
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $ligne ?> <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li>
                             <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                          </li>
                       </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
<?php require 'connexion.php';
$idclient = $_SESSION['user'][0];
$requeteSelect = $cnx->prepare("SELECT * FROM commande WHERE idclient=$idclient");
$requeteSelect->execute();
$res = $requeteSelect;
?>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>Numero Commande</th>
      <th>Date</th>
      <th>Etat</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {

      echo "<tr class=active>
          <td>".$ligne['nocom']."</td>
          <td>".$ligne['datecom']."</td>
          <td>".$ligne['etatcom']."</td>
        </tr>";
  /*  <tr>
      <td>Default</td>
      <td>Defaultson</td>
      <td>def@somemail.com</td>
    </tr>
    <tr class="success">
      <td>Success</td>
      <td>Doe</td>
      <td>john@example.com</td>
    </tr>
    <tr class="danger">
      <td>Danger</td>
      <td>Moe</td>
      <td>mary@example.com</td>
    </tr>
    <tr class="info">
      <td>Info</td>
      <td>Dooley</td>
      <td>july@example.com</td>
    </tr>
    <tr class="warning">
      <td>Warning</td>
      <td>Refs</td>
      <td>bo@example.com</td>
    </tr>
*/
}
    ?>
  </tbody>
</table>
</div>
<!-- end Page Content -->
        <div class="container">

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Fsegs 2017</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
