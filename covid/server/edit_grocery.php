<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

if(isset($_POST['update'])) #isset-to check whether update has been clicked or not, $_POST to access the name update
{
    $file="";
	if(isset($_FILES['file'])) //to upload file, check whether choose file is clicked or not
	{
		$folder="item_image"; //folder name
		//uploading
		$file_exts=array("jpg", "JPG", "JPEG", "bmp", "jpeg", "gif", "png", "PNG", "doc", "docx", "pdf");
		$value=explode(".", $_FILES["file"]["name"]); //breaking the file name into two parts name and extension
		$upload_exts=end($value); //stores the exts
		if((($_FILES["file"]["type"] == "image/gif")
	    || ($_FILES["file"]["type"] == "image/jpeg")
	    || ($_FILES["file"]["type"] == "image/jpg")
	    || ($_FILES["file"]["type"] == "image/JPG")
	    || ($_FILES["file"]["type"] == "image/JPEG")
	    || ($_FILES["file"]["type"] == "image/png")
	    || ($_FILES["file"]["type"] == "image/PNG")
	    || ($_FILES["file"]["type"] == "image/pjpeg")
	    || ($_FILES["file"]["type"] == "application/msword")
	    || ($_FILES["file"]["type"] == "application/msword")
	    || ($_FILES["file"]["type"] == "application/pdf")) //checking file type
	    && ($_FILES["file"]["size"] < 2000000000) //checking file size if it is within 2MB
	    && in_array($upload_exts, $file_exts)) //in_array(needle, haystack)
		{
			if($_FILES["file"]["error"] > 0) //check for error, if present nothing happens
			{

			}
			else
			{
				//enter your path to <span id="IL_ADS" class="IL_AD">upload file</span> here
				if(file_exists("$folder/".$_FILES["file"]["name"])) //check whether file exists with file_exists(filename)
				{
					echo "<div class='error'>"."(".$_FILES["file"]["name"].")"." already exists. "."</div>";
				}
				else
				{
					//random name generated for file
					$ran=md5(time().rand()); //md5(str)
					$file=$ran.".".$upload_exts; //add random file name and exts 
					move_uploaded_file($_FILES["file"]["tmp_name"], "$folder/".$file); //uploading the file to the folder with move_uploaded_file(filename, destination)
				}
			}
		}
	}

	$query="update grocery set g_name='".$_POST['g_name']."', c_id='".$_POST['category']."', price='".$_POST['price']."', image='".$file."' where g_id='".$_REQUEST['id']."'";
	mysqli_query($con,$query);
}

$query="select * from grocery where g_id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

$query_c="select * from grocery_category where status='1'";
$result_c=mysqli_query($con,$query_c);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="menubar">
	    	<div class="item"><a href="./">HOME</a></div>
	    	<div class="item"><a href="grocery.php">Go to Grocery table</a></div>
	</div>
    
	<form method="post" action="" enctype="multipart/form-data"> <!-- method="get(not secured)/post(secured)"-->
		<table>
			<tr>
				<td>Grocery Name : </td>
				<td><input type="text" name="g_name" value="<?php echo $fetch->g_name;?>"></td>
			</tr>
			<tr>
				<td>Select Category : </td>
				<td>
					<select name="category">
						<?php while($fetch_c=mysqli_fetch_object($result_c)) {?>
						<!-- to keep the previously selected course name in the combo box of edit page -->
						<option value="<?php echo $fetch_c->c_id?>" <?php if($fetch->c_id==$fetch_c->c_id) {?> selected="selected" <?php }?> > <?php echo $fetch_c->c_name?> </option>
					    <?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Price : </td>
				<td><input type="number" name="price" value="<?php echo $fetch->price;?>"></td>
			</tr>
			<tr>
				<td>Image : </td>
				<td><input type="file" name="file" value="<?php echo $fetch->image;?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

</body>
</html>