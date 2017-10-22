<?php include ('config/comconn.php');
		include ('config/login_session.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COMPARATOR | </title>

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
.timeline {
  position: relative;
  padding: 20px 0 20px;
  list-style: none;
}
.timeline:before {
  content: " ";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  width: 3px;
  margin-left: -1.5px;
  background-color: #eeeeee;
}
.timeline > li {
  position: relative;
  margin-bottom: 20px;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  float: left;
  position: relative;
  width: 46%;
  padding: 20px;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li > .timeline-panel:before {
  content: " ";
  display: inline-block;
  position: absolute;
  top: 26px;
  right: -15px;
  border-top: 15px solid transparent;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  border-left: 15px solid #ccc;
}
.timeline > li > .timeline-panel:after {
  content: " ";
  display: inline-block;
  position: absolute;
  top: 27px;
  right: -14px;
  border-top: 14px solid transparent;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  border-left: 14px solid #fff;
}
.timeline > li > .timeline-badge {
  z-index: 100;
  position: absolute;
  top: 16px;
  left: 50%;
  width: 50px;
  height: 50px;
  margin-left: -25px;
  border-radius: 50% 50% 50% 50%;
  text-align: center;
  font-size: 1.4em;
  line-height: 50px;
  color: #fff;
  background-color: #999999;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.timeline-badge.success {
  background-color: #3f903f !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #5bc0de !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}
    </style>
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

<div class="panel panel-default">
  <div class="panel-heading" style="margin-top: 150px;">
    <center><h3><i class="fa fa-clock-o fa-fw"></i> Price Comparison</h3></center>
  </div>
  <!-- /.panel-heading -->
  <div class="panel-body" style="margin-left: 60px; margin-right: 60px;">
      <ul class="timeline">
                <?php
                  include ('config/comconn.php');
                  $prod="";
                  if ($_SERVER['REQUEST_METHOD']=='GET') {
                    if (Key_Exists("prod",$_GET)) {
                      $prod=$_GET['prod'];
                    }
                    $result=mysqli_query($comconn,"SELECT CostAma,CostFlip,CostSnap FROM products where ProdName='".$prod."'");
                    $res=mysqli_query($comconn,"SELECT ProdImg FROM products where ProdName='".$prod."'");
                  }
                  $row=mysqli_fetch_assoc($result); 
                  $img=mysqli_fetch_row($res);
                  asort($row);	
                  $i=0;
                  foreach($row as $x=>$x_value)
                   {
                    if($i==0)
                    {
                   ?>
                             <li>
              <div class="timeline-badge"><i class="fa fa-check"></i>
              </div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4 class="timeline-title"><center><?= $prod ?></center></h4>
                      <?php
                        $res2=mysqli_query($comconn,"SELECT SiteLink FROM BuyLink where BuySite='".$x."'");
                        $link=mysqli_fetch_row($res2);
                      ?>
                      <a href="<?= $link[0].$prod ?>"><img class="img-fluid d-block mx-auto" src="<?= $img[0] ?>" alt=""></a>
                      <img width="100px" class="img-fluid d-block mx-auto" src="assets/img/logos/<?= $x ?>.jpg" alt="">
                  </div>
                  <div class="timeline-body">
                      <h4><center>Rs.<?= $x_value ?>/-</center></h4>
                  </div>
              </div>
          </li>
          <?php
            $i=1;
          }
          elseif ($i==1) {
          ?>
              <li class="timeline-inverted">
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4 class="timeline-title"><center><?= $prod ?></center></h4>
                      <?php
                        $res2=mysqli_query($comconn,"SELECT SiteLink FROM BuyLink where BuySite='".$x."'");
                        $link=mysqli_fetch_row($res2);
                      ?>
                      <a href="<?= $link[0].$prod ?>"><img class="img-fluid d-block mx-auto" src="<?= $img[0] ?>" alt=""></a>
                      <img width="100px" class="img-fluid d-block mx-auto" src="assets/img/logos/<?= $x ?>.jpg" alt="">
                  </div>
                  <div class="timeline-body">
                      <h4><center>Rs.<?= $x_value ?>./-</center></h4>
                  </div>
              </div>
          </li>
          <?php
            $i=0;
        }
                   }
                ?>
      </ul>
  </div>
    <!-- /.panel-body -->
</div>
    <!-- /.panel -->
</div>

    <!-- Footer -->
     <footer>
		<form action="categories.php">
              <button class="btn btn-md btn-primary btn-block" name="backcat" type="submit">Go Back To PRODUCT CATEGORIES</button>
           </form>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>

  </body>

</html>
