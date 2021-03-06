<!DOCTYPE html>
<?php
$idcat = $_GET['x'];
$servername  = "localhost";
$username = "root";
$password = "";
try {
    $cnx = new PDO("mysql:host=$servername;dbname=venteinfo",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
                      <a href="#">Contact</a>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Compte <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li>
                           <a href="login.php"><i class="fa fa-fw fa-user"></i> login</a>
                        </li>
                        <li>
                           <a href="register.php"><i class="fa fa-fw fa-power-off"></i> Sign in</a>
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

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <?php
                $req = $cnx->prepare("select * FROM categorie");
                   $req->execute();
                   $res = $req;
                 ?>
               <div class="list-group">
                 <?php while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) { ?>
                    <a href="listmatrielcategsanscompte.php?x=<?= $ligne['idcateg'] ?>" class="list-group-item"><?= $ligne['libcateg'] ?></a>
                    <?php } ?>
                </div>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->


                <!-- /.navbar-collapse -->
            </div>

            <div class="col-md-9">


                <div class="row">
                  <?php
                  $req = $cnx->prepare("select * FROM matriel where categoriemat=$idcat and qte_stock>0");
                  $req->execute();
                  $res = $req;
                  while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
                  ?>
               <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                          <img src="images/<?= $ligne['image']?>" alt="" height="50" width="50">
                            <div class="caption">

                                <h4><a href="#"><?php echo ($ligne['libmat']); ?></a>
                                </h4>

                                <p><?php echo ($ligne['description']); ?></p>
                            </div>


                                <p>
                                  <div class="ratings">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                  <!--  <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>-->

                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->

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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
