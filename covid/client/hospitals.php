<style>
	.container
	{
		margin-left: auto;
		margin-right: auto;
		margin-top: auto;
		margin-bottom: auto;
		color: black !important;
		background-color: rgb(250, 250, 250,.5);
	}
	a{
		color:black;
	}
	h2{
		text-align: center;
	}
</style>

<?php 
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
//include("include/sidebar.php");

$query="select * from hospitals where status='1'";
$result=mysqli_query($con,$query);

?>

<style type="text/css">
	body{
		margin-top: 60px;
		background-image: url("https://www.roadrunnerwm.com/hubfs/Hospital_Waste_Blog_01.png");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		background-position: 50% 50%;
	}

</style>
<body>
	<h2>Hospital Bed Services</h2>
	<div class="container">
	<table class="table table-striped">
		        <thead>
		        	<th>Hospital Name</th>
		        	<th>Address</th>
		        	<th>Phone No.</th>
		        </thead>
		<?php while($fetch=mysqli_fetch_object($result)) {?>
	    		<tr>
	    			<td><a href="bed_types.php?id=<?php echo $fetch->id; ?>"><?php echo $fetch->categories; ?></a></td>
	    			<td><?php echo $fetch->address; ?></td>
	    			<td><?php echo $fetch->phone; ?></td>
	    		</tr>
	    <?php }?>
	</table>
</div>
</body>