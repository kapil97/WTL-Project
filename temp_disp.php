<?php include ('config/comconn.php');
		include ('config/login_session.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Temporary Display</title>
</head>
<body>
<!-->	<?php //echo "<script type='text/javascript'>alert('Login Successful')</script>";

			//echo "Hello ".$_SESSION['sess_u_name'];
	 ?><!--><br>
	 <h1>Welcome: <i><?php  echo $_SESSION['ses_u_name'];  ?></i></h1><br>
<h1>Here Ash's shopping page will be displayed</h1><br>
<h3><a href="logout.php">LOGOUT</a></h3>
</body>
</html>