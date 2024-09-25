<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from medicine";
$result=mysqli_query($con,$query);
#$fetch=mysqli_fetch_object($result);
if(isset($_REQUEST['del']))
{
	$query="delete from medicine where med_id='".$_REQUEST['del']."'";
	mysqli_query($con,$query);
	header("location:medicine.php"); #forced refresh to delete the row in the user page itself
}
?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
	        <div class="item"><a href="add_medicine.php">Add Medicine</a></div>
        </div>
        <div class="middle">
	    	<table class="table table-bordered">
	    		<caption>Medicine Details</caption>
	    		<tr>
	    			<th>Med_id</th>
	    			<th>Medicine Name</th>
	    			<th>Description</th>
	    			<th>Price</th>
	    			<th>Image</th>
	    			<th>Symptom_id</th>
	    			<th>Symptom</th>
	    			<th>Edit</th>
	    			<th>Delete</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->med_id; ?></td>
	    			<td><?php echo $fetch->med_name; ?></td>
	    			<td><?php echo $fetch->descrip; ?></td>
	    			<td><?php echo $fetch->price; ?></td>
	    			<td><img src="item_image/<?php echo $fetch->image; ?>" alt="Image" style="height: 50px; width: 50px;"></td>
	    			<td><?php echo $fetch->symptom_id; ?></td>
	    			<td>
	    				<?php 
	    				$query1="select name from symptom where id='".$fetch->symptom_id."'";
	    			    $result1=mysqli_query($con,$query1);
	    			    $fetch1=mysqli_fetch_object($result1);
	    			    echo $fetch1->name; 
	    			    ?>
	    			</td>
	    			<td><a href="edit_medicine.php?id=<?php echo $fetch->med_id;?>">Edit</a></td>
	    			<td><a href="medicine.php?del=<?php echo $fetch->med_id;?>">Delete</a></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
