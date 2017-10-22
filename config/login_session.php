<?php
session_start();
include ('comconn.php');
$error="";

if (isset($_POST['login'])) {
if (empty($_POST['logusername']) || empty($_POST['logpass'])) {
$error = "Username or Password is invalid";
}
else{
  $log_username = $_POST['logusername'];
  $log_pass = $_POST['logpass'];

  $qlogin = mysqli_query($comconn,"SELECT * FROM userinfo WHERE u_name='$log_username' and u_pass='$log_pass'");
  $row  = mysqli_fetch_array($qlogin);
  if(is_array($row)) {
  $_SESSION['ses_u_name'] = $log_username;
  $_SESSION['id']=$row['u_id'];
    echo '<script>
            window.location.href="../categories.php";
            </script>';
    } 
    else {
    $error = "Username or Password is invalid";
  }
}
}
?>