<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from healthy_meal";
$result=mysqli_query($con,$query);

if(isset($_REQUEST['del']))
{
	$query="delete from healthy_meal where hm_id='".$_REQUEST['del']."'";
	mysqli_query($con,$query);
	header("location:healthy_meal.php"); #forced refresh to delete the row in the user page itself
}
?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
	        <div class="item"><a href="add_healthy_meal.php">Add Healthy Meal</a></div>
        </div>
        <div class="middle">
        	
	    	<table class="table table-bordered">
	    		<caption>Meal Details</caption>
	    		<tr>
	    			<th>Hm_id</th>
	    			<th>Meal Name</th>
	    			<th>Meal Description</th>
	    			<th>Price</th>
	    			<th>Image</th>
	    			<th>C_id</th>
	    			<th>Category</th>
	    			<th>Edit</th>
	    			<th>Delete</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->hm_id; ?></td>
	    			<td><?php echo $fetch->hm_name; ?></td>
	    			<td><?php echo $fetch->descrip; ?></td>
	    			<td><?php echo $fetch->price; ?></td>
	    			<td><img src="item_image/<?php echo $fetch->image; ?>" alt="Image" style="height: 50px; width: 50px;"></td>
	    			<td><?php echo $fetch->c_id; ?></td>
	    			<td>
	    				<?php 
	    				$query1="select c_name from meal_category where c_id='".$fetch->c_id."'";
	    			    $result1=mysqli_query($con,$query1);
	    			    $fetch1=mysqli_fetch_object($result1);
	    			    echo $fetch1->c_name; 
	    			    ?>
	    			</td>
	    			<td><a href="edit_healthy_meal.php?id=<?php echo $fetch->hm_id;?>">Edit</a></td>
	    			<td><a href="healthy_meal.php?del=<?php echo $fetch->hm_id;?>">Delete</a></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
