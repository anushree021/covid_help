<?php
session_start();
$session=session_id();
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
?>
<head>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style type="text/css">
	.table, .item2{
		border: 1px solid lightgrey;
		padding: 20px;
		margin: 10px;
	}
	.total{
		font-weight: bold;
	}
</style>

<div class="container">
<div class="item1">
<table class="table table-bordered">
<thead><th>Item No.</th><th>Item Name</th><th>Item Price(₹)</th><th>Quantity</th><th>Sub Total(₹)</th><th colspan="3">Actions</th></thead>
<?php
$total=0;
$index=1;
$item_name="";
$item_price=0;

$_SESSION['cart']=session_id();
$query = "SELECT * FROM `order_session` WHERE session='".$_SESSION['cart']."'";
$result=mysqli_query($con,$query);

while($fetch=mysqli_fetch_object($result)){
	if($fetch->table_id==1){
		$query1="select * from medicine where med_id='".$fetch->item_id."'";
		$result1=mysqli_query($con,$query1);
        $fetch1=mysqli_fetch_object($result1);
        $item_name=$fetch1->med_name;
        $item_price=$fetch1->price;
	}
	elseif($fetch->table_id==2){
		$query1="select * from grocery where g_id='".$fetch->item_id."'";
		$result1=mysqli_query($con,$query1);
        $fetch1=mysqli_fetch_object($result1);
        $item_name=$fetch1->g_name;
        $item_price=$fetch1->price;
	}
	elseif($fetch->table_id==3){
		$query1="select * from healthy_meal where hm_id='".$fetch->item_id."'";
		$result1=mysqli_query($con,$query1);
        $fetch1=mysqli_fetch_object($result1);
        $item_name=$fetch1->hm_name;
        $item_price=$fetch1->price;
	}
?>
<tr>
<td><?php echo $index;?></td>
<td><?php echo $item_name;?></td>
<td><?php echo $item_price;?>.00</td>
<td><?php echo $fetch->qty;?></td>
<td>
<?php
$subtotal=$fetch->qty*$item_price;
echo $subtotal;
$total = $total+$subtotal;
?>.00
</td>
<td><a href="cart.php?increase=<?php echo $fetch->item_id;?>&amp table_id=<?php echo $fetch->table_id;?>"><i class="fa fa-plus-square" style="font-size:24px" aria-hidden="true"></i></a></td>
<td><a href="cart.php?decrease=<?php echo $fetch->item_id;?>&amp table_id=<?php echo $fetch->table_id;?>"><i class="fa fa-minus-square" style="font-size:24px" aria-hidden="true"></i></a></td>
<td><a href="cart.php?delete=<?php echo $fetch->item_id;?>&amp table_id=<?php echo $fetch->table_id;?>"><i class="fa fa-trash" style="font-size:24px" aria-hidden="true"></i></a></td>
</tr>
<?php
$index++;
}?>
<td class="total" colspan="8">Total Cost : ₹<?php echo $total;?>.00</td>
</table>
</div>
<div class="item2">
<form method="post" action="payment.php">
<table>
<tr><td>Your Name:</td><td><input class="form-control" type="text" name="firstname" value=""></td></tr>
<tr><td>Your Address:</td><td><textarea class="form-control" type="text" name="address" value=""></textarea></td></tr>
<tr><td>Your Email:</td><td><input class="form-control" type="text" name="email" value=""></td></tr>
<tr><td>Your Phone:</td><td><input class="form-control" type="text" name="phone" value=""></td></tr>
<tr><td><input type="hidden" name="productinfo" value="test"></td></tr>
<tr><td><input type="hidden" name="amount" value="<?php echo $total;?>"></td></tr>
<tr><td><input type="hidden" name="surl" value="http://localhost/covid/client/payment_gateway/success.php"></td></tr>
<tr><td><input type="hidden" name="furl" value="http://localhost/covid/client/payment_gateway/failure.php"></td></tr>
<tr><td><input class="btn btn-primary" type="submit" name="submit" value="Proceed To Payment"></td></tr>
</table>
</form>
</div>
</div>

