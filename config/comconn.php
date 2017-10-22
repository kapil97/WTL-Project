<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "wtl-price-temp";
$comconn = mysqli_connect($server,$username,$password,$dbname);
if(!$comconn)
{
die("connection aborted".mysqli_error($comconn));
}
?>