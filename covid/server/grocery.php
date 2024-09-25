<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from grocery";
$result=mysqli_query($con,$query);
#$fetch=mysqli_fetch_object($result);
if(isset($_REQUEST['del']))
{
	$query="delete from grocery where g_id='".$_REQUEST['del']."'";
	mysqli_query($con,$query);
	header("location:grocery.php"); #forced refresh to delete the row in the user page itself
}
?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
	        <div class="item"><a href="add_grocery.php">Add Grocery</a></div>
        </div>
        <div class="middle">
	    	<table class="table table-bordered">
	    		<caption>Grocery Details</caption>
	    		<tr>
	    			<th>G_id</th>
	    			<th>Grocery Name</th>
	    			<th>Price</th>
	    			<th>Image</th>
	    			<th>C_id</th>
	    			<th>Category</th>
	    			<th>Edit</th>
	    			<th>Delete</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->g_id; ?></td>
	    			<td><?php echo $fetch->g_name; ?></td>
	    			<td><?php echo $fetch->price; ?></td>
	    			<td><img src="item_image/<?php echo $fetch->image; ?>" alt="Image" style="height: 50px; width: 50px;"></td>
	    			<td><?php echo $fetch->c_id; ?></td>
	    			<td>
	    				<?php 
	    				$query1="select c_name from grocery_category where c_id='".$fetch->c_id."'";
	    			    $result1=mysqli_query($con,$query1);
	    			    $fetch1=mysqli_fetch_object($result1);
	    			    echo $fetch1->c_name; 
	    			    ?>
	    			</td>
	    			<td><a href="edit_grocery.php?id=<?php echo $fetch->g_id;?>">Edit</a></td>
	    			<td><a href="grocery.php?del=<?php echo $fetch->g_id;?>">Delete</a></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
