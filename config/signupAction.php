<?php
include "comconn.php";
/*$server = "localhost";
$username = "root";
$password = "";
$dbname = "wtl-price";
$comconn = mysqli_connect($server,$username,$password,$dbname);
if(!$comconn)
{
die("connection aborted".mysqli_error($comconn));
}
*/
if (isset($_POST['register']))
	{
		$signup_username = $_POST['username'];
		$signup_emailid = $_POST['emailid'];
		$signup_pass = $_POST['pass'];
		$qinsert = "insert userinfo VALUES(DEFAULT,'$signup_username','$signup_emailid','$signup_pass')";
		mysqli_query($comconn,$qinsert);
		echo '<br><br><br><br><br><br><br><br><div class="col-lg-12 text-center">
    	<h1 class="text-success">You have successfully Registered !</h1>
            <h2 class="section-subheading text-muted">You can now LOGIN and Start Shopping !</h2>
    </div>';
	}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Home | Comparator</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../assets/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">COMPARATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.html#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.html#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.html#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../login.php">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div></body></html>