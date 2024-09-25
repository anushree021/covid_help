<?php
//session_start();
//$session=session_id();
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

$querry="UPDATE order_invoice set transaction_id='".$txnid."', status='paid' where email='".$email."' and session='".$productinfo."'";
mysqli_query($con,$querry);

$select="select * from order_session where session='".$productinfo."'";
$result=mysqli_query($con,$select);

while($fetch=mysqli_fetch_object($result))
{
  $querry="insert into order_final set item_id='".$fetch->item_id."', table_id='".$fetch->table_id."', qty='".$fetch->qty."', session='".$fetch->session."'";
  mysqli_query($con,$querry);
}
$del="delete from order_session where session='".$productinfo."'";
mysqli_query($con,$del);

// Salt should be same Post Request 

if (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
} 
else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
       $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
       }
       else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
       }
?>	