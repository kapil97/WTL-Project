<?php
$sserver = "localhost";
$susername = "root";
$spassword = "";
$sdbname = "wtl-price-temp";
$scomconn = mysqli_connect($sserver,$susername,$spassword,$sdbname);

session_start();
$user_check=$_SESSION['ses_u_name'];

$ses_sql=mysqli_query($scomconn,"select u_name from userinfo where u_name='$user_check'");
$row2 = mysqli_fetch_assoc($ses_sql);
$login_session =$row2['u_name'];
if(!isset($login_session)){
mysqli_close($scomconn); // Closing Connection
header('Location: "login.php"'); // Redirecting To Home Page
}

if(!$scomconn)
{
die("connection aborted".mysqli_error($scomconn));
}
?>