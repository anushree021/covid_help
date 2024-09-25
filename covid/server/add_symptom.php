<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

if(isset($_POST['insert'])) #isset-to check whether insert has been clicked or not, $_POST to access the name insert
{
	$query="insert into symptom set name='".$_POST['name']."'";
	mysqli_query($con,$query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="menubar">
	    <div class="item"><a href="./">HOME</a></div>
	    <div class="item"><a href="symptom.php">Go to Symptom Table</a></div>
    </div>
    
	<form method="post" action=""> <!-- method="get(not secured)/post(secured)"-->
		<table>
			<tr>
				<td>Symptom Name : </td>
				<td><input type="text" name="name" value="" placeholder="Enter symptom name"></td>
			</tr>
			<tr>
				<td><input type="submit" name="insert" value="Insert"></td>
			</tr>
		</table>
	</form>

</body>
</html>