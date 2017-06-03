<!DOCTYPE html>
<?php
session_start();
if($_SESSION['niv']!=1)
{
  header("location:login.php");
}
else {
  # code...
  echo session_id(); echo "<br>";
  echo session_name() ; echo "<br>";
}
   $servername  = "localhost";
   $username = "root";
   $password = "";
   try {
       $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
       $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $req = $cnx->prepare("select * FROM client");
       $req->execute();
       $res = $req;
   } catch (Exception $e) {
     echo $e;
   }
    ?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Administartion - GROSSISTE – SITE B2B</title>
      <!-- Bootstrap Core CSS -->
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
                  <li class="active">
                     <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                  </li>
                  <li class="active">
                     <a href="gestionClient.php"><i class="fa fa-fw fa-table"></i>Gerer Client</a>
                  </li>
                  <li class="active">
                     <a href="gestionMatriel.php"><i class="fa fa-fw fa-table"></i>Gerer Matiel</a>
                  </li>


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
                        Tables
                     </h1>
                     <ol class="breadcrumb">
                        <li>
                           <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                           <i class="fa fa-table"></i> Tables
                        </li>
                     </ol>
                  </div>
               </div>
               <!-- /.row -->
               <div class="row">
                  <div class="col-lg-6">
                     <h2>List Client</h2>
                     <div class="table-responsive">
                        <table class="table table-hover table-striped">
                           <thead>
                              <tr>
                                 <th>Numero</th>
                                 <th>
                                   Cin
                                 </th>
                                 <th>Nom</th>
                                 <th>Adresse</th>
                                 <th>Email</th>
                                 <th>telephone</th>
                                 <th>
                                   Etat
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                              <tr>
                                 <td><?php echo($ligne['idclient']) ?></td>
                                 <td><?php echo($ligne['cin']) ?></td>
                                 <td><?php echo($ligne['nomClient']) ?></td>
                                 <td><?php echo($ligne['emailClient']) ?></td>
                                 <td> <?php echo($ligne['adressclient']) ?></td>
                                 <td><?php echo($ligne['telclient']) ?></td>
                                 <td><?php echo($ligne['etat']) ?></td>
                                 <?php $c = $ligne['idclient']; ?>
                                 <td> <?php  echo("<a href='suppClient.php?x=$c'><button type=button class=btn btn-sm btn-primary> Supprimer</button></a>");?> </td>
                                 <td> <?php echo ("<a href='pageModification.php?y=$c'><button type=button class=btn btn-info>Modifier</button></a>"); ?> </td>
                              </tr>
                           </tbody>
                           <?php } ?>
                        </table>
                        <div class="">
                           <!-- Modal Modifier Client -->
                           <div class="modal fade" id="ModalModifClient" role="dialog">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Modifier Client</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form role="form" action="ModalModifClient.php" method="post">
                                          <div class="form-group">
                                              <label>Numero</label>
                                              <input class="form-control" name="num" value="<?php echo($c) ?>">
                                              <p class="help-block">Example block-level help text here.</p>
                                              <label>nom</label>
                                              <input class="form-control" name="nom">
                                              <label>Prenom</label>
                                              <input class="form-control" name="prenom">
                                              <label>address</label>
                                              <input class="form-control" name="adr">
                                              <label>Email</label>
                                              <input class="form-control" name="email">
                                          </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Modifier</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!-- end Modal Modifier Client -->
                        </div>

                        <div class="">
                           <button type="button" name="btn_ajout"  class="btn btn-info" data-toggle="modal" data-target="#myModal">Ajouter Client</button>
                           <!-- Modal Client -->
                           <?php require 'modalajoutclient.php'; ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <?php $req = $cnx->prepare("SELECT * from matriel JOIN categorie on matriel.categoriemat = categorie.idcateg");
                     $req->execute();
                     $res = $req; ?>
                  <h2>List Matriel</h2>
                  <div class="table-responsive">
                     <table class="table table-hover table-striped">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Libelle</th>
                              <th>Prix</th>
                              <th>Qte Stock</th>
                              <th>Category</th>
                              <th>Image</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
                              # code...
                              echo "
                              <tr>

                                  <td>".$ligne['idmat']."</td>
                                  <td>".$ligne['libmat']."</td>
                                  <td>".$ligne['prix']."</td>
                                  <td>".$ligne['qte_stock']."</td>
                                  <td>".$ligne['libcateg']."</td>
                                  <td><img src=images/".$ligne['image']." alt= height=50 width=50></td>";
                                  $m = $ligne['idmat'];
                                echo "  <td><a href='suppMatriel.php?x=$m'><button type=button class=btn btn-sm btn-primary> Supprimer</button></a></td>
                                  <td> <a href='modifmatriel.php?>'><button type=button class=btn btn-sm btn-primary>Modifier</button></a> </td>
                              </tr>
                              </tbody>";
                              } ?>
                     </table>

                  </div>
               </div>
            </div>
            <div class="">
               <button type="button" name="btn_ajout"  class="btn btn-info" data-toggle="modal" data-target="#modalMatriel">Ajouter Matriel</button>
               <!-- Modal -->
              <?php require 'modalajoutmatriel.php'; ?>
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-lg-6">
                  <h2>Categoies</h2>
                  <div class="table-responsive">
                    <?php $req = $cnx->prepare("select * FROM categorie");
                       $req->execute();
                       $res = $req; ?>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Libelle</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
                              echo "
                              <tr>
                                  <td>".$ligne['idcateg']."</td>
                                  <td>".$ligne['libcateg']."</td> ";?>
                        </tbody>
                        <?php } ?>
                     </table>
                  </div>
               </div>

            </div>
            <!-- /.row -->

            <!-- /.row -->
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
