<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from symptom";
$result=mysqli_query($con,$query);

if(isset($_REQUEST['del']))
{
	$query="delete from symptom where id='".$_REQUEST['del']."'";
	mysqli_query($con,$query);
	header("location:symptom.php"); #forced refresh to delete the row in the page itself
}
if(isset($_REQUEST['status'])) #change of status on clicking on status
{
	$query="update symptom set status='".$_REQUEST['status']."' where id='".$_REQUEST['id']."'";
	mysqli_query($con,$query);
	header("location:symptom.php"); #forced refresh to change the status from 1 to 0 or vice-versa in the page itself
}
?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
	        <div class="item"><a href="add_symptom.php">Add Symptom</a></div>
        </div>
        <div class="middle">
        	
	    	<table class="table table-bordered">
	    		<caption>Symptom Details</caption>
	    		<tr>
	    			<th>id</th>
	    			<th>Symptom Name</th>
	    			<th>Status</th>
	    			<th>Edit</th>
	    			<th>Delete</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->id; ?></td>
	    			<td><?php echo $fetch->name; ?></td>
	    			<!-- to show course status as active(1) or inactive(0) and change it on one click --> 
	    			<td>
	    				<?php if($fetch->status=='1') {?>
	    				<a href="?status=0 & id=<?php echo $fetch->id;?>">Active</a>
	    			    <?php }
	    			    else if($fetch->status=='0') {?>
	    			    <a href="?status=1 & id=<?php echo $fetch->id;?>">Inactive</a>
	    			    <?php }?>
	    			</td>
	    			<td><a href="edit_symptom.php?id=<?php echo $fetch->id;?>">Edit</a></td>
	    			<td><a href="symptom.php?del=<?php echo $fetch->id;?>">Delete</a></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
