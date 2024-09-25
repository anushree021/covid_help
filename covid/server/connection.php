<?php
$con=mysqli_connect("localhost","root","","covid_help");

@session_start();
if($_SESSION['name']=='') #if session name is blank then directing to the login page
{
	header("location:login.php");
}
?>