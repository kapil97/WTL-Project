<?php 
  include ('config/comconn.php');  
  session_start();
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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">COMPARATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <?php
            if(isset($_SESSION['ses_u_name'])){
              echo'<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Hello ! '.$_SESSION['ses_u_name'].'</a>
            </li>
            <li class="nav-item">
              <form action="wishlist.php">
              <button class="btn btn-md btn-primary btn-block" name="wishlist" style="margin-top:5px;margin-right: 8px;" type="submit">View Wishlist</button>
            </form>
            </li>
            <li class="nav-item">
              <form action="categories.php">
              <button class="btn btn-md btn-primary btn-block" name="categories" style="margin-right: 8px;margin-left: 8px;margin-top:5px" type="submit">Product Categories</button>
            </form>
            </li>
            <li class="nav-item">
              <form action="logout.php">
              <button class="btn btn-md btn-primary btn-block" name="logout" style="margin-left: 16px;margin-top:5px" type="submit">LOGOUT</button>
            </form>
            </li>';
            }
            else{
            echo'<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.php">SIGNUP</a>
            </li>';} ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Site!</div>
          <div class="intro-heading">It's Nice To Meet You</div>
          <a class="btn btn-xl js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Services</h2>
            <h3 class="section-subheading text-muted">Find the best deal here !</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">For Customer</h4>
            <p class="text-muted">We show you the product prices from different retailers to help you decide where to buy the product affordably. </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">For Retailers</h4>
            <p class="text-muted">We give ecommerce merchants the opportunity to attract new customers, increase sales, and go head-to-head against the competition.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa-plus-square fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Additional Feature</h4>
            <p class="text-muted">Login to add bookmarks and to get constant updates about products you wish to buy.</p>
          </div>
        </div>
      </div>
    </section>

<center><a href="login.php" > <img src="assets/img/start_shopping.gif" style="border:2px solid orange;"></a></center>
    <!-- Most Recommended Grid -->
    <!-- <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Most Recommended Products</h2>
            <h3 class="section-subheading text-muted">Enjoy Shopping !</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/laptop-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laptops</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/smartphone-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Smartphones</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-shopping-cart fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/portfolio/tablet-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Tablets</h4>
            </div>
          </div>
      </div>
    </section><!-->
    
    <!-- Team -->
  <!-->  <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Amazing Team</h2>
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/img/team/k.jpg" alt="">
              <h4>Kamleshwar Ragava</h4>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/img/team/a.jpg" alt="">
              <h4>Ashwathi Ashok</h4>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/img/team/s.jpg" alt="">
              <h4>Siddhesh Shinde</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Bringing you an Amazing Shopping Experience</p>
          </div>
        </div>
      </div>
    </section><!-->

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
        	<div class="col-md-4 col-sm-6">
            <a href="https://www.amazon.in/">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/amazon-logo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="https://www.flipkart.com/">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/flipkart-logo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="https://www.snapdeal.com/">
              <img class="img-fluid d-block mx-auto" src="assets/img/logos/snapdeal-logo.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Comparator</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#page-top">Go to Top</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/agency.min.js"></script>

  </body>

</html>
