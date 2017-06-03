<!DOCTYPE html>
<?php
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
               <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                  <ul class="dropdown-menu message-dropdown">
                     <li class="message-preview">
                        <a href="#">
                           <div class="media">
                              <span class="pull-left">
                              <img class="media-object" src="http://placehold.it/50x50" alt="">
                              </span>
                              <div class="media-body">
                                 <h5 class="media-heading"><strong>John Smith</strong>
                                 </h5>
                                 <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                 <p>Lorem ipsum dolor sit amet, consectetur...</p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="message-preview">
                        <a href="#">
                           <div class="media">
                              <span class="pull-left">
                              <img class="media-object" src="http://placehold.it/50x50" alt="">
                              </span>
                              <div class="media-body">
                                 <h5 class="media-heading"><strong>John Smith</strong>
                                 </h5>
                                 <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                 <p>Lorem ipsum dolor sit amet, consectetur...</p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="message-preview">
                        <a href="#">
                           <div class="media">
                              <span class="pull-left">
                              <img class="media-object" src="http://placehold.it/50x50" alt="">
                              </span>
                              <div class="media-body">
                                 <h5 class="media-heading"><strong>John Smith</strong>
                                 </h5>
                                 <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                 <p>Lorem ipsum dolor sit amet, consectetur...</p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                  <ul class="dropdown-menu alert-dropdown">
                     <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                     </li>
                     <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                     </li>
                     <li class="divider"></li>
                     <li>
                        <a href="#">View All</a>
                     </li>
                  </ul>
               </li>
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
                     <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                     <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                  </li>
                  <li class="active">
                     <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                  </li>
                  <li>
                     <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                  </li>
                  <li>
                     <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                  </li>
                  <li>
                     <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                  </li>
                  <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                     <ul id="demo" class="collapse">
                        <li>
                           <a href="#">Dropdown Item</a>
                        </li>
                        <li>
                           <a href="#">Dropdown Item</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                  </li>
                  <li>
                     <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
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
                        <table class="table table-bordered table-hover table-striped">
                           <thead>
                              <tr>
                                 <th>Numero</th>
                                 <th>Nom</th>
                                 <th>Adresse</th>
                                 <th>Email</th>
                                 <th>telephone</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                              <tr>
                                 <td><?php echo($ligne['numcl']) ?></td>
                                 <td><?php echo($ligne['nomcl']) ?></td>
                                 <td><?php echo($ligne['prenomcl']) ?></td>
                                 <td> <?php echo($ligne['adresscl']) ?></td>
                                 <td><?php echo($ligne['telcl']) ?></td>

                                 <?php $c = $ligne['numcl']; ?>
                                 <td> <?php  echo("<a href='suppClient.php?x=$c'><button type=button class=btn btn-sm btn-primary> Supprimer</button></a>");?> </td>
                                 <td> <?php echo ("<a href='modifClient.php?y=$c'><button type=button class=btn btn-sm btn-primary>Modifier</button></a>"); ?> </td>
                              </tr>
                           </tbody>
                           <?php } ?>
                        </table>
                        <div class="">
                           <button type="button" name="btn_ajout"  class="btn btn-info" data-toggle="modal" data-target="#myModal">Ajouter Client</button>
                           <!-- Modal Client -->
                           <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form role="form" action="ajoutercli.php" method="post">
                                          <div class="form-group">
                                              <label>Numero</label>
                                              <input class="form-control" name="num">
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
                                        <button type="submit" class="btn btn-info">Ajouter</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <?php $req = $cnx->prepare("select * FROM matriel");
                     $req->execute();
                     $res = $req; ?>
                  <h2>List Matriel</h2>
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover table-striped">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Libelle</th>
                              <th>Prix</th>
                              <th>Qte Stock</th>
                              <th>Category</th>
                              <th>Marque</th>
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
                                  <td>".$ligne['categorie']."</td>
                                  <td>".$ligne['marque']."</td>
                                  <td>".$ligne['Image']."</td>";
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
               <div class="modal fade" id="modalMatriel" role="dialog">
                  <div class="modal-dialog">
                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <form role="form" action="ajouterMat.php" method="post">
                              <div class="form-group">
                                  <label>Identifion</label>
                                  <input class="form-control" name="id">
                                  <p class="help-block">Example block-level help text here.</p>
                                  <label>Libelle</label>
                                  <input class="form-control" name="lib">
                                  <label>Prix</label>
                                  <input class="form-control" name="prx">
                                  <label>qte_stock</label>
                                  <input class="form-control" name="qtes">
                                  <?php
                                  $req1 = $cnx->prepare("select * FROM categorie");
                                  $req1->execute();
                                  $resu = $req1;
                                   ?>
                                  <label for="">Categorie</label>
                                  <select class="form-control" name="">
                                    <?php
                                      while ($lignecat = $resu->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <option value="<?php $lignecat['idcateg']?>"><?php echo($lignecat['libcateg']);?></option>
                                    <?php  } ?>
                                  </select>

                                  <label>marquee</label>
                                  <input class="form-control" name="marq">

                              </div>
                            </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Ajouter</button>
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-lg-6">
                  <h2>Basic Table</h2>
                  <div class="table-responsive">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th>Page</th>
                              <th>Visits</th>
                              <th>% New Visits</th>
                              <th>Revenue</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>/index.html</td>
                              <td>1265</td>
                              <td>32.3%</td>
                              <td>$321.33</td>
                           </tr>
                           <tr>
                              <td>/about.html</td>
                              <td>261</td>
                              <td>33.3%</td>
                              <td>$234.12</td>
                           </tr>
                           <tr>
                              <td>/sales.html</td>
                              <td>665</td>
                              <td>21.3%</td>
                              <td>$16.34</td>
                           </tr>
                           <tr>
                              <td>/blog.html</td>
                              <td>9516</td>
                              <td>89.3%</td>
                              <td>$1644.43</td>
                           </tr>
                           <tr>
                              <td>/404.html</td>
                              <td>23</td>
                              <td>34.3%</td>
                              <td>$23.52</td>
                           </tr>
                           <tr>
                              <td>/services.html</td>
                              <td>421</td>
                              <td>60.3%</td>
                              <td>$724.32</td>
                           </tr>
                           <tr>
                              <td>/blog/post.html</td>
                              <td>1233</td>
                              <td>93.2%</td>
                              <td>$126.34</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h2>Striped Rows</h2>
                  <div class="table-responsive">
                     <table class="table table-hover table-striped">
                        <thead>
                           <tr>
                              <th>Page</th>
                              <th>Visits</th>
                              <th>% New Visits</th>
                              <th>Revenue</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>/index.html</td>
                              <td>1265</td>
                              <td>32.3%</td>
                              <td>$321.33</td>
                           </tr>
                           <tr>
                              <td>/about.html</td>
                              <td>261</td>
                              <td>33.3%</td>
                              <td>$234.12</td>
                           </tr>
                           <tr>
                              <td>/sales.html</td>
                              <td>665</td>
                              <td>21.3%</td>
                              <td>$16.34</td>
                           </tr>
                           <tr>
                              <td>/blog.html</td>
                              <td>9516</td>
                              <td>89.3%</td>
                              <td>$1644.43</td>
                           </tr>
                           <tr>
                              <td>/404.html</td>
                              <td>23</td>
                              <td>34.3%</td>
                              <td>$23.52</td>
                           </tr>
                           <tr>
                              <td>/services.html</td>
                              <td>421</td>
                              <td>60.3%</td>
                              <td>$724.32</td>
                           </tr>
                           <tr>
                              <td>/blog/post.html</td>
                              <td>1233</td>
                              <td>93.2%</td>
                              <td>$126.34</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-lg-6">
                  <h2>Contextual Classes</h2>
                  <div class="table-responsive">
                     <table class="table table-bordered table-hover table-striped">
                        <thead>
                           <tr>
                              <th>Page</th>
                              <th>Visits</th>
                              <th>% New Visits</th>
                              <th>Revenue</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="active">
                              <td>/index.html</td>
                              <td>1265</td>
                              <td>32.3%</td>
                              <td>$321.33</td>
                           </tr>
                           <tr class="success">
                              <td>/about.html</td>
                              <td>261</td>
                              <td>33.3%</td>
                              <td>$234.12</td>
                           </tr>
                           <tr class="warning">
                              <td>/sales.html</td>
                              <td>665</td>
                              <td>21.3%</td>
                              <td>$16.34</td>
                           </tr>
                           <tr class="danger">
                              <td>/blog.html</td>
                              <td>9516</td>
                              <td>89.3%</td>
                              <td>$1644.43</td>
                           </tr>
                           <tr>
                              <td>/404.html</td>
                              <td>23</td>
                              <td>34.3%</td>
                              <td>$23.52</td>
                           </tr>
                           <tr>
                              <td>/services.html</td>
                              <td>421</td>
                              <td>60.3%</td>
                              <td>$724.32</td>
                           </tr>
                           <tr>
                              <td>/blog/post.html</td>
                              <td>1233</td>
                              <td>93.2%</td>
                              <td>$126.34</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h2>Bootstrap Docs</h2>
                  <p>For complete documentation, please visit <a target="_blank" href="http://getbootstrap.com/css/#tables">Bootstrap's Tables Documentation</a>.</p>
               </div>
            </div>
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
