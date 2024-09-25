<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from oxygen";
$result=mysqli_query($con,$query);

?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
        </div>
        <div class="middle">
        	
	    	<table class="table table-bordered">
	    		<caption>OXYGEN BOOKING SERVICE</caption>
	    		<tr>
	    			<th>Id</th>
	    			<th>Name</th>
	    			<th>Age</th>
	    			<th>PhoneNo</th>
	    			<th>Email</th>
	    			<th>Address</th>
                    <th>Type</th>
	    			<th>Cylinder Qty</th>
	    			<th>Amount</th>
	    			<th>Transaction Id</th>
	    			<th>Session</th>
	    			<th>Status</th>
	    			<th>Date</th>
	    			
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->id; ?></td>
	    			<td><?php echo $fetch->Name; ?></td>
	    			<td><?php echo $fetch->Age; ?></td>
	    			<td><?php echo $fetch->PhoneNo; ?></td>
	    			<td><?php echo $fetch->email; ?></td>
                    <td><?php echo $fetch->Address; ?></td>
                    <td><?php echo $fetch->Type; ?></td>
                    <td><?php echo $fetch->Cylinder; ?></td>
                    <td><?php echo $fetch->amount; ?></td>
                    <td><?php echo $fetch->transaction_id; ?></td>
                    <td><?php echo $fetch->session; ?></td>
                    <td><?php echo $fetch->status; ?></td>
	    			<td><?php echo $fetch->date; ?></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
