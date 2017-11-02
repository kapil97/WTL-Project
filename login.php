<?php
session_start();
//include ('config/scomconn.php');
include('config/login_session.php'); // Includes Login Script

if(isset($_SESSION['ses_u_name'])){
header("location: categories.php");
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | Comparator</title>

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

    <style type="text/css">

      .wrapper {  
        margin-top: 80px;
        margin-bottom: 80px;
      }

      .form-signin {
        max-width: 380px;
        padding: 15px 35px 45px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);
      }

        .form-signin-heading,
        .checkbox {
          margin-bottom: 30px;
        }

        .checkbox {
          font-weight: normal;
        }

        .form-control {
          position: relative;
          font-size: 16px;
          height: auto;
          padding: 10px;
        }

    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">COMPARATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.php">SIGNUP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!--> Login <!-->
    <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Login</h2>
            <h3 class="section-subheading text-muted" style="margin-bottom: 0px;">Welcome back !</h3>
          </div>
        </div>
          <div class="wrapper" style="margin-top: 50px; margin-bottom: 30px;">
            <form action="" class="form-signin" name="form_login" method="POST">      
              <br> 
              <input type="text" class="form-control" name="logusername" placeholder="Username" required="" autofocus="" />
              <br>
              <input type="password" class="form-control" name="logpass" placeholder="Password" required=""/>  
              <br>    
              <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button> 
              <span><?php echo $error; ?></span>
            </form>
          </div>
      </div>
    </section>

    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>

    <script src="js/agency.min.js"></script>

  </body>
</html>