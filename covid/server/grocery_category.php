<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from grocery_category";
$result=mysqli_query($con,$query);

if(isset($_REQUEST['del']))
{
	$query="delete from grocery_category where c_id='".$_REQUEST['del']."'";
	mysqli_query($con,$query);
	header("location:grocery_category.php"); #forced refresh to delete the row in the page itself
}
if(isset($_REQUEST['status'])) #change of status on clicking on status
{
	$query="update grocery_category set status='".$_REQUEST['status']."' where c_id='".$_REQUEST['id']."'";
	mysqli_query($con,$query);
	header("location:grocery_category.php"); #forced refresh to change the status from 1 to 0 or vice-versa in the page itself
}
?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
	        <div class="item"><a href="add_grocery_category.php">Add grocery category</a></div>
        </div>
        <div class="middle">
        	
	    	<table class="table table-bordered">
	    		<caption>Grocery Category Details</caption>
	    		<tr>
	    			<th>C_id</th>
	    			<th>Grocery Category Name</th>
	    			<th>Status</th>
	    			<th>Edit</th>
	    			<th>Delete</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->c_id; ?></td>
	    			<td><?php echo $fetch->c_name; ?></td>
	    			<!-- to show course status as active(1) or inactive(0) and change it on one click --> 
	    			<td>
	    				<?php if($fetch->status=='1') {?>
	    				<a href="?status=0 & id=<?php echo $fetch->c_id;?>">Active</a>
	    			    <?php }
	    			    else if($fetch->status=='0') {?>
	    			    <a href="?status=1 & id=<?php echo $fetch->c_id;?>">Inactive</a>
	    			    <?php }?>
	    			</td>
	    			<td><a href="edit_grocery_category.php?id=<?php echo $fetch->c_id;?>">Edit</a></td>
	    			<td><a href="grocery_category.php?del=<?php echo $fetch->c_id;?>">Delete</a></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
