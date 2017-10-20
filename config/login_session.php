<?php
session_start();
include ('comconn.php');
$error="";

  
 /* if (isset($_POST['login']) && !empty($_POST['logusername']) 
               && !empty($_POST['logpass'])
*/

if (isset($_POST['login'])) {
if (empty($_POST['logusername']) || empty($_POST['logpass'])) {
$error = "Username or Password is invalid";
}
else{
//if(!empty($_POST["login"])) {
    //if(isset($_POST["login"])){
/* $qlogin = mysqli_query($comconn,"SELECT * FROM userinfo WHERE u_name='" . $_POST["logusername"] . "' and password = '". $_POST["logpass"]."'");*/
  $log_username = $_POST['logusername'];
  $log_pass = $_POST['logpass'];

  $qlogin = mysqli_query($comconn,"SELECT * FROM userinfo WHERE u_name='$log_username' and u_pass='$log_pass'");
  $row  = mysqli_fetch_array($qlogin);
  if(is_array($row)) {
  //$_SESSION["ses_u_name"] = $row['u_name'];
  $_SESSION['ses_u_name'] = $log_username;
  //echo "<script type='text/javascript'>alert('Login Successful')</script>";
  header('location: "../temp_disp.php"');
    } 
    else {
    $error = "Username or Password is invalid";
}
}
}
?>