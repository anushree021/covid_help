<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

$query="select * from patients";
$result=mysqli_query($con,$query);

?>
	    <div class="menubar">
	        <div class="item"><a href="./">HOME</a></div>
        </div>
        <div class="middle">
	    	<table class="table table-bordered">
	    		<caption>Hospital Patient Details</caption>
	    		<tr>
	    			<th>Patient Id</th>
	    			<th>Hospital Id</th>
	    			<th>Bed Type Id</th>
	    			<th>Patient Name</th>
	    			<th>Patient Age</th>
	    			<th>Patient's Phone No.</th>
	    			<th>Email</th>
	    			<th>Relative's Phone No.</th>
	    			<th>Patient Gender</th>
	    			<th>Blood Group</th>
	    			<th>Heart Rate(bmp)</th>
	    			<th>SPO2(%)</th>
	    			<th>Amount</th>
	    			<th>Transaction Id</th>
	    			<th>Session</th>
	    			<th>Status</th>
	    			<th>Date</th>
	    		</tr>
	    		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><?php echo $fetch->patient_id; ?></td>
	    			<td><?php echo $fetch->hospital_id; ?></td>
	    			<td><?php echo $fetch->bed_type_id; ?></td>
	    			<td><?php echo $fetch->patient_name; ?></td>
	    			<td><?php echo $fetch->patient_age; ?></td>
	    			<td><?php echo $fetch->patient_phone_no; ?></td>
	    			<td><?php echo $fetch->email; ?></td>
	    			<td><?php echo $fetch->patient_relative_phone_no; ?></td>
	    			<td><?php echo $fetch->patient_gender; ?></td>
	    			<td><?php echo $fetch->patient_blood_group; ?></td>
	    			<td><?php echo $fetch->patient_heart_rate; ?></td>
	    			<td><?php echo $fetch->spo2; ?></td>
	    			<td><?php echo $fetch->amount; ?></td>
                    <td><?php echo $fetch->transaction_id; ?></td>
                    <td><?php echo $fetch->session; ?></td>
                    <td><?php echo $fetch->status; ?></td>
	    			<td><?php echo $fetch->date; ?></td>
	    		</tr>
	    	    <?php }?>
	    	</table>
	    </div>
