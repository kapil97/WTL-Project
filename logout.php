<?php
   session_start();
   if(session_destroy())
{
   unset($_SESSION["ses_u_name"]); 
      echo '<script>alert("Logout Successful! Please Log in again to continue");
			window.location.href="login.php";
			</script>';
}
?>