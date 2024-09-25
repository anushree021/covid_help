<style>
	.container
	{
		margin-left: auto;
		margin-right: auto;
		margin-top: auto;
		margin-bottom: auto;
		opacity:1;
		color: black !important;

	}
	a{
		color:black;
	}
</style>

<?php 
include("connection.php");
include("include/meta.php");
include("include/header.php");
//include("include/sidebar.php");

$query="select * from categories where status='1'";
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