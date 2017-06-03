<?php
session_start();
if($_SESSION['niv']!=1)
{
  header("location:login.php");
}
require 'connexion.php';
$idcom = $_GET['y'];
$req = $cnx->prepare("SELECT DISTINCT* FROM ligne_commande JOIN matriel on ligne_commande.idmat = matriel.idmat where nocom=$idcom");
$req->execute();
$res = $req;
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
                <!-- Page Heading -->
                <div class="row">
                   <div class="col-lg-12">
                      <h1 class="page-header">
                         details Commande
                      </h1>
                      <ol class="breadcrumb">
                         <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                         </li>
                         <li class="active">
                            <i class="fa fa-table"></i> Tables
                         </li>
                         <li class="active">
                            <i class="fa fa-table"></i> Detail commande
                         </li>
                      </ol>
                   </div>
                </div>
                <!-- /.row -->
                <div class="row">
                   <div class="col-lg-6">

                      <div>
                        <table class="table table-bordered">
                          <thead>
                            <th>
                              Numero Commande
                            </th>
                            <th>
                              Matriel Commandee
                            </th>
                            <th>
                              Qantite Commande
                            </th>
                          </thead>
                          <tbody>
                            <?php
                            while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
                             ?>
                               <td>
                                 <?= $ligne['nocom'] ?>
                               </td>
                               <td>
                                 <?= $ligne['libmat'] ?>
                               </td>
                               <td>
                                 <?= $ligne['qtecomm'] ?>
                               </td>
                             </tr>
                              <?php }?>
                              <?php
                              $req = $cnx->prepare("SELECT sum(ligne_commande.qtecomm*matriel.prix) as total FROM ligne_commande JOIN matriel ON ligne_commande.idmat = matriel.idmat WHERE nocom =$idcom");
                              $req->execute();
                              $res = $req;
                              $total =  $res->fetch(PDO::FETCH_ASSOC)['total'];
                              ?>
                              <tr>
                                <td colspan="3">
                                </td>
                                <td class="" colspan="3">
                                  Total = <?= $total ?>
                                </td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                      </div>
                   </div>
                </div>
          </div>
          <!-- /.container-fluid -->
       </div>
       <!-- /#page-wrapper -->
       </div>
       <!-- /#wrapper -->
       <!-- jQuery -->
       <script src="js/jquery.js"></script>
       <!-- Bootstrap Core JavaScript -->
       <script src="js/bootstrap.min.js"></script>
    </body>
 </html>
