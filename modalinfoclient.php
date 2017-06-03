
<!-- Modal Information Client -->
<?php
$idcc = $_GET['w'];
require 'connexion.php';
$req = $cnx->prepare("select * FROM client where idclient=$idcc");
$req->execute();
$res = $req;
$ligne = $res->fetch(PDO::FETCH_ASSOC);
 ?>
 <html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Gestion Client - Administartion</title>
      <!-- Bootstrap Core CSS   -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/sb-admin.css" rel="stylesheet">
      <!-- Custom Fonts -->

      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div id="wrapper">
         <!-- Navigation -->
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="dashbord.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                     </li>
                     <li class="divider"></li>
                     <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                     </li>
                  </ul>
               </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav side-nav">
                  <li>
                     <a href="dashbord.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li class="active"><a  href="gestionCommande.php"><i class="fa fa-fw fa-table"></i>Gerer Cammande Client</a></li>
                  <li>
                     <a href="gestionClient.php"><i class="fa fa-fw fa-table"></i>Gerer Client</a>
                  </li>
                  <li>
                     <a href="gestionMatriel.php"><i class="fa fa-fw fa-table"></i>Gerer Matiel</a>
                  </li>
                  <li><a href="categories.php"><i class="fa fa-fw fa-table"></i>categories</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>

         <div id="page-wrapper">
            <div class="container-fluid">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Information Client</h4>
         </div>
         <div class="modal-body">

               <div class="form-group">
                   <label>Cin</label>
                   <input class="form-control" name="id" value="<?= $ligne['cin'] ?>">
                   <label>Nom</label>
                   <input class="form-control" name="nom" value="<?= $ligne['nomClient'] ?>">
                   <label>Email</label>
                   <input class="form-control" name="email" value="<?= $ligne['emailClient'] ?>">
                   <label>Telephone</label>
                   <input class="form-control" name="tel" value="<?= $ligne['telclient'] ?>">
                   <label>Adress</label>
                   <input class="form-control" name="nom" value="<?= $ligne['adressclient'] ?>">
               </div>
             </div>
         <div class="modal-footer">
        <a href="gestionCommande.php">
         <button type="submit" class="btn btn-default">Close</button>
         </a>
         </div>

      </div>
   </div>
</div>
</div>

<!-- end modal information client -->
