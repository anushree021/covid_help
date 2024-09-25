<?php #consider as ajax page
session_start();
include("connection.php");
if(!isset($_SESSION['cart'])) {
	$c=0;
}
if(isset($_REQUEST['item_id']))
{
	if(!isset($_SESSION['cart']))
	{
		$session=session_id();
		$_SESSION['cart']=$session;
		
	}
	else{
		$session=$_SESSION['cart'];
	}

	$query="select * from order_session where item_id='".$_REQUEST['item_id']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0){
		$fetch=mysqli_fetch_object($result);
		$qty=$fetch->qty+1;
		$query1="update order_session set qty='".$qty."' where item_id='".$_REQUEST['item_id']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
		mysqli_query($con,$query1);
	}
	else{
		$query1="insert into order_session set item_id='".$_REQUEST['item_id']."', table_id='".$_REQUEST['table_id']."', qty='1', session='".$session."'";
		mysqli_query($con,$query1);
	}

	if($_REQUEST['table_id']==1){
		header("location:../medicine.php");
	}
	elseif($_REQUEST['table_id']==2){
		header("location:../grocery.php");
	}
	elseif($_REQUEST['table_id']==3){
		header("location:../healthy_meal.php");
	}

}
if(isset($_REQUEST['increase']))
{
	$session = session_id();
	$query="select * from order_session where item_id='".$_REQUEST['increase']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0){
		$fetch=mysqli_fetch_object($result);
		$qty=$fetch->qty+1;
		$query1="update order_session set qty='".$qty."' where item_id='".$_REQUEST['increase']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
		mysqli_query($con,$query1);
	}
    header("location:view_cart.php");
}
if(isset($_REQUEST['decrease']))
{
	$session = session_id();
	$query="select * from order_session where item_id='".$_REQUEST['decrease']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0){
		$fetch=mysqli_fetch_object($result);
		if($fetch->qty>1){
			$qty=$fetch->qty-1;
		    $query1="update order_session set qty='".$qty."' where item_id='".$_REQUEST['decrease']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
		    mysqli_query($con,$query1);
		}
		else{
			$query1="delete from order_session where id ='".$fetch->id."'";
			mysqli_query($con,$query1);
		}
	}
    header("location:view_cart.php");
}
if(isset($_REQUEST['delete']))
{
	$session = session_id();
	$query ="delete from order_session where item_id='".$_REQUEST['delete']."' and table_id='".$_REQUEST['table_id']."' and session='".$session."'";
	mysqli_query($con,$query);
	header("location:view_cart.php");
}
?>