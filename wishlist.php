<?php include ('config/comconn.php');
  include ('config/login_session.php');
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
        <a class="navbar-brand js-scroll-trigger" href="index.html">COMPARATOR</a>
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
              <form action="logout.php">
              <button class="btn btn-md btn-primary btn-block" name="logout" type="submit">LOGOUT</button>
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

      <?php
          include ('config/comconn.php');
          $prod="";
          $id=$_SESSION['id'];
          if ($_SERVER['REQUEST_METHOD']=='GET') {
            if (Key_Exists("prod",$_GET)) {
              $prod=$_GET['prod'];
              $s="select * from Wishlist where UserId=$id AND ProdName='".$prod."'";
            $result = mysqli_query($comconn,$s);
            $row = mysqli_fetch_row($result);
            if($row==false)
            {
            $s = "select (max(WishID)+1) from Wishlist";
            $result = mysqli_query($comconn,$s);
            $row = mysqli_fetch_row($result);
            $no=1;
            if($row[0]!=NULL)
              $no=$row[0];
            $id=$_SESSION['id'];
            $result=mysqli_query($comconn,"insert into Wishlist values($no,$id,'".$prod."')");
          }
          else
          {
            
        ?>
        <div class="col-lg-9">
      <?php
echo "<h5>Already added to Wishlist..!</h5>";
          }
          }
          }
          $result=mysqli_query($comconn,"select ProdName from Wishlist where UserId=$id.");
      ?>
          <div class="row">
            <?php
            while(($row=mysqli_fetch_row($result))==true)
            {
              $res=mysqli_query($comconn,"select ProdImg from Products where ProdName='".$row[0]."'");
              $img=mysqli_fetch_row($res);
            ?>
            <div class="col-lg-4 col-md-6 mb-2">
              <div class="card h-50">
                <a href="<?= $row[0] ?>"><img class="card-img-top" src="<?= $img[0] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="compare.php?prod=<?= $row[0]?>"><?= $row[0]?></a>
                  </h4>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
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
