<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from contact";
$result=mysqli_query($con,$query);

?>
	    <div class="menubar">
	    	<div class="item"><a href="./">HOME</a></div>
	    </div>
        <div class="middle">
	    	<table class="table table-bordered">
	    		<caption>Contact Messages</caption>
	    		<tr>
	    			<th>Id</th>
	    			<th>Name</th>
	    			<th>Email</th>
	    			<th>Message</th>
	    			<th>Date</th>
	    			
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->id; ?></td>
	    			<td><?php echo $fetch->name; ?></td>
	    			<td><?php echo $fetch->email; ?></td>
                    <td><?php echo $fetch->message; ?></td>
	    			<td><?php echo $fetch->date; ?></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
