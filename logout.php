<?php
   session_start();
   if(session_destroy())
{
   unset($_SESSION["ses_u_name"]); 
   echo 'You have successfully logged out';
   header('Refresh: 2; URL = login.php');
}
?>