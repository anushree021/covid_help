<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

if(isset($_POST['update'])) #isset-to check whether update has been clicked or not, $_POST to access the name update
{
	$query="update symptom set name='".$_POST['name']."' where id='".$_REQUEST['id']."'";
	mysqli_query($con,$query);
}

$query="select * from symptom where id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="menubar">
	    <div class="item"><a href="./">HOME</a></div>
	    <div class="item"><a href="symptom.php">Go to Symptom table</a></div>
    </div>
    
	<form method="post" action=""> <!-- method="get(not secured)/post(secured)"-->
		<table>
			<tr>
				<td>Symptom Name : </td>
				<td><input type="text" name="name" value="<?php echo $fetch->name;?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

</body>
</html>