<?php include ('config/comconn.php');
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COMPARATOR | CATEGORIES</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #222;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">COMPARATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Hello ! <?php  echo $_SESSION['ses_u_name'];  ?></a>
            </li>
            <li class="nav-item">
              <form action="wishlist.php">
              <button class="btn btn-md btn-primary btn-block" name="wishlist" style="margin-right: 8px;margin-top:5px" type="submit">View Wishlist</button>
            </form>
            </li>
            <li class="nav-item">
              <form action="logout.php">
              <button class="btn btn-md btn-primary btn-block" name="logout" style="margin-left: 8px;margin-top: 5px" type="submit">LOGOUT</button>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row" style="margin-top: 150px;">

        <div class="col-lg-3" style="vertical-align: center">

          <h1 class="my-4"> </h1>
          <div class="list-group" style="font-size: 30px">
          </div>
                  </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
<?php

          include ('config/comconn.php');
          $prod="";
          $id=$_SESSION['id'];
          if ($_SERVER['REQUEST_METHOD']=='GET') {
            if (Key_Exists("prod",$_GET)) {
              $prod=$_GET['prod'];
              $s="select * from wishlist where UserID=$id AND ProdName='".$prod."'";
            $result = mysqli_query($comconn,$s);
            $row = mysqli_fetch_row($result);
            if($row==false)
            {
            $s = "select (max(WishID)+1) from wishlist";
            $result = mysqli_query($comconn,$s);
            $row = mysqli_fetch_row($result);
            $no=1;
            if($row[0]!=NULL)
              $no=$row[0];
            $id=$_SESSION['id'];
            $result=mysqli_query($comconn,"insert into wishlist values('$no','$id','".$prod."')");
          }
          else
          {
echo "<h5>Already added to Wishlist..!</h5><br><br>";
          }
          }
          }
          if ($_SERVER['REQUEST_METHOD']=='GET') {
            if (Key_Exists("remove",$_GET)) {
              $prod=$_GET['remove'];
              $s="delete from wishlist where UserID=$id AND ProdName='".$prod."'";
            $result = mysqli_query($comconn,$s);
            if($result==true)
              echo "<h5>Removed from wishlist..!</h5><br><br>";
          }}
          $result=mysqli_query($comconn,"select ProdName from wishlist where UserId='$id'");
      ?>
          <div class="row">
            <?php
            while(($row=mysqli_fetch_row($result))==true)
            {
              $res=mysqli_query($comconn,"select ProdImg from products where ProdName='".$row[0]."'");
              $img=mysqli_fetch_row($res);
            ?>
            <div class="col-lg-4 col-md-6 mb-2">
              <div class="card h-100">
                <a href="<?= $row[0] ?>"><img class="card-img-top" src="<?= $img[0] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="compare.php?prod=<?= $row[0]?>"><?= $row[0]?></a>
                  </h4>
                </div>
                      <div class="card-footer">
                  <p><a href="wishlist.php?remove=<?= $row[0]?>">Remove from wishlist</a></p>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
          <!-- /.row -->
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <center><img class="d-block img-fluid" src="assets/img/logos/amazon-logo.jpg" alt="First slide"></center>
              </div>
              <div class="carousel-item">
                <center><img class="d-block img-fluid" src="assets/img/logos/flipkart-logo.jpg" alt="Second slide"></center>
              </div>
              <div class="carousel-item">
                <center><img class="d-block img-fluid" src="assets/img/logos/snapdeal-logo.png" alt="Third slide"></center>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/agency.min.js"></script>

  </body>

</html>
