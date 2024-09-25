<?php
include("connection.php");
if(isset($_REQUEST['login'])) #on clicking login on login.php it will be directed here
{
	$query="select * from admin where email='".$_REQUEST['email']."' and password='".$_REQUEST['password']."' and status='1'";
	$result=mysqli_query($con,$query);
	$fetch=mysqli_fetch_object($result);
	$count=mysqli_num_rows($result); #counts the no. of rows affected
	if($count>0)
	{
		@session_start();
		$_SESSION['name']=$fetch->name;
		$_SESSION['email']=$fetch->email;
		$_SESSION['aid']=$fetch->id;
		header("location:index.php");
	}
	else 
    {
        header("location:login.php");
    }
}
if(isset($_REQUEST['logout'])) 
{
	#$_SESSION['name']='';
	@session_destroy();
	@session_start(); #to start a new session and destroy the old session completely in case for a browser if session does not destroy completely even after @session_destroy();
	header("location:login.php");    
}
?>