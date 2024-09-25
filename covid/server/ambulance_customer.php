<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from ambulance";
$result=mysqli_query($con,$query);

?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
        </div>
        <div class="middle">
	    	<table class="table table-bordered">
	    		<caption>Ambulance Customer Details</caption>
	    		<tr>
	    			<th>Id</th>
	    			<th>Ambulance Type</th>
	    			<th>Name</th>
	    			<th>Contact</th>
	    			<th>Email</th>
	    			<th>Age</th>
	    			<th>PickUp Address</th>
	    			<th>Drop Address</th>
	    			<th>Amount</th>
	    			<th>Transaction Id</th>
	    			<th>Session</th>
	    			<th>Status</th>
	    			<th>Date</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->id; ?></td>
	    			<td><?php echo $fetch->ambulance_type; ?></td>
	    			<td><?php echo $fetch->name; ?></td>
	    			<td><?php echo $fetch->contact; ?></td>
	    			<td><?php echo $fetch->email; ?></td>
	    			<td><?php echo $fetch->age; ?></td>
	    			<td><?php echo $fetch->pickup_address; ?></td>
	    			<td><?php echo $fetch->drop_address; ?></td>
	    			<td><?php echo $fetch->amount; ?></td>
                    <td><?php echo $fetch->transaction_id; ?></td>
                    <td><?php echo $fetch->session; ?></td>
                    <td><?php echo $fetch->status; ?></td>
	    			<td><?php echo $fetch->date; ?></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
