<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

if(isset($_POST['insert'])) #isset-to check whether insert has been clicked or not, $_POST to access the name insert
{
	$query="insert into grocery_category set c_name='".$_POST['c_name']."'";
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
	    <div class="item"><a href="grocery_category.php">Go to Grocery Category Table</a></div>
    </div>
   
	<form method="post" action=""> <!-- method="get(not secured)/post(secured)"-->
		<table>
			<tr>
				<td>Grocery Category Name : </td>
				<td><input type="text" name="c_name" value="" placeholder="Enter category name"></td>
			</tr>
			<tr>
				<td><input type="submit" name="insert" value="Insert"></td>
			</tr>
		</table>
	</form>

</body>
</html>