<!DOCTYPE html>
<?php
   $servername  = "localhost";
   $username = "root";
   $password = "";
   try {
       $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
       $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $c = $_GET['y'];
       $req1 = $cnx->prepare("select * FROM client where idclient = $c");
       $req1->execute();
       $res1 = $req1;
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
      <title>SB Admin - Bootstrap Admin Template</title>
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
              <div class="modal-body">
                <form role="form" action="updateclient.php" method="post">
                  <?php $ligne = $res1->fetch(PDO::FETCH_ASSOC) ?>
                    <div class="form-group">
                        <label>Cin</label>
                        <input class="form-control" name="cin" value="<?= $ligne['cin'] ?>">
                        <label>nom</label>
                        <input class="form-control" name="nom" value="<?= $ligne['nomClient'] ?>">
                        <label>Telephone</label>
                        <input class="form-control" name="tel" value="<?= $ligne['telclient'] ?>">
                        <label>address</label>
                        <input class="form-control" name="adr" value="<?= $ligne['adressclient'] ?>">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email" value="<?= $ligne['emailClient'] ?>">
                        <label>login</label>
                        <input class="form-control" name="login" value="<?= $ligne['login'] ?>">
                        <label>Mot de passe</label>
                        <input class="form-control" name="pass" type="password" value="<?= $ligne['motpass'] ?>">
                        <label>Etat</label>
                        <select class="form-control" name="sel1">
                          <option value="bloque">Bloque</option>
                          <option value="valide">Valide</option>
                        </select>
                        <label>remise</label>
                        <input class="form-control" name="remise" type="text" value="<?= $ligne['remise'] ?>">
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-info">Valider</button>
                     <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </form>
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
