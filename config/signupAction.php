<?php
include "comconn.php";
$error="";
$flag = 1;

if (isset($_POST['register']))
	{
		$signup_name = $_POST['name'];
		$signup_username = $_POST['username'];
		$signup_emailid = $_POST['emailid'];
		$signup_pass = $_POST['pass'];
    	$signup_repass = $_POST['repass'];

	$qname = mysqli_query($comconn,"SELECT * FROM userinfo WHERE u_name='$signup_username'");
  	$srow  = mysqli_fetch_array($qname);
  	if(is_array($srow)){
  			$flag = 0;
  			echo '<script>alert("Username already exists");
			document.reg.username.value=""
			window.location.href="../signup.php";
			</script>';
  		}
    	

	if(((preg_match( '/\d/', $signup_name ))==true) || (preg_match('/[^a-zA-Z\d]/', $signup_name)==true)) {
   		$flag = 0;
   		echo '<script>alert("Name cannot contain numbers or special characters");
			document.reg.name.value=""
			window.location.href="../signup.php";
			</script>';
	}

    
    if($signup_pass!=$signup_repass){
    $flag = 0;
   echo '<script>alert("Re-entered password is incorrect");
			document.reg.pass.value=""
			document.reg.repass.value=""
			window.location.href="../signup.php";
			</script>';
    }


		 if($flag == 1)
    {
		$qinsert = "INSERT INTO userinfo (u_id,u_namer,u_name,u_mail,u_pass) VALUES(DEFAULT,'$signup_name','$signup_username','$signup_emailid','$signup_pass')";
		mysqli_query($comconn,$qinsert);
		echo '<script>alert("Registration Successful");
		window.location.href="../login.php";</script>';
  	}
}
?>
