<?php session_start();
require 'connexion.php';
function MontantGlobal(){
  $total=0;
  for($i = 0; $i < count($_SESSION['panier']['libmat']); $i++)
  {
     $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
  }
  return $total;
}
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
    <div class="container">
    <div class="row">
      <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Libelle</th>
      <th>Qunatite</th>
      <th>
        Prix Unitaire
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $id = $_SESSION['user'][0];
    $reqclient = $cnx->prepare("select * FROM client where idclient =$id");
    $reqclient->execute();
    $res = $reqclient;
    $remise = $res->fetch(PDO::FETCH_ASSOC)['remise'];
    $nbArticle = count($_SESSION['panier']['id']);

    if($nbArticle<=0)
      echo "<tr><td>Votre panier est vide </ td></tr>";
      else {
        # code...
        for ($i=0; $i < $nbArticle; $i++) {
    echo "<tr>";
    echo " <th scope=row>".$_SESSION['panier']['id'][$i]."</th>";
    echo " <td>".$_SESSION['panier']['libmat'][$i]."</td>";
    echo " <td>".$_SESSION['panier']['quantite'][$i]."</td>";
    echo " <td>".$_SESSION['panier']['prix'][$i]."</td>";
    $id = $_SESSION['panier']['id'][$i];
    echo "<td> <a href='suppcaddie.php?x=$id'><button type=button class=btn btn-sm btn-primary> Supprimer</button></a></td>";
    echo "</tr>";
    }
    echo "<tr><td colspan=\"2\"> </td>";
			echo "<td colspan=\"2\">";
      echo "Total sans remise : ".MontantGlobal()." DT";
      if ($remise==1) {
        echo "<br>Taux de remise : ".(0)."%";
      }
      else {
        echo "<br>Taux de remise : ".($remise*100)."%";
    }
      echo "<br>Total Net : ".MontantGlobal()*$remise." DT";
			echo "</td></tr>";
    echo "</tbody>";
  }
  ?>
</table>
    </div>
    <div class="row">
      <?php $temp = $_SESSION['panier'] ?>
      <form class="" action="ajoutercommande.php" method="post">
        <input type="hidden" name="tab" value="<?php echo "$temp" ?>">
        <?php

        $id = $_SESSION['user'][0];
        $reqclient = $cnx->prepare("select * FROM client where idclient =$id");
        $reqclient->execute();
        $res = $reqclient;
        $etat = $res->fetch(PDO::FETCH_ASSOC)['etat'];
        $nbArticle = count($_SESSION['panier']['id']);
         if($etat =="bloque" || $nbArticle==0 ){
      echo "<button type=submit class=btn btn-primary disabled=>Commander</button>";}
        else {
      echo "<button type=submit class=btn btn-primary>Commander</button>";
    }?>
      </form>
    </div>
    </div>

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
