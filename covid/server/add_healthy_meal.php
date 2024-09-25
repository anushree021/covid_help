<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

if(isset($_POST['insert'])) 
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

	$query="insert into healthy_meal set hm_name='".$_POST['hm_name']."', c_id='".$_POST['category']."', descrip='".$_POST['descrip']."', price='".$_POST['price']."', image='".$file."'";
	mysqli_query($con,$query); 
}
$query="select * from meal_category where status='1'"; #select courses which have active(1) status
$result=mysqli_query($con,$query);
?>

<div class="menubar">
	<div class="item"><a href="./">HOME</a></div>
	<div class="item"><a href="healthy_meal.php">Go to Healthy Meals Table</a></div>
</div>

	<div class="middle">
	<form method="post" action="" enctype="multipart/form-data"> 
		<table>
			<tr>
				<td>Meal Name : </td>
				<td><input type="text" name="hm_name" value="" placeholder="Enter meal name"></td>
			</tr>
			<tr>
				<td>Meal Category : </td>
				<td>
					<select name="category">
						<?php while($fetch=mysqli_fetch_object($result)) {?> 
						<option value="<?php echo $fetch->c_id?>"><?php echo $fetch->c_name?></option>
					    <?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Meal Description : </td>
				<td><input type="text" name="descrip" value="" placeholder="Enter description"></td>
			</tr>
			<tr>
				<td>Price : </td>
				<td><input type="input" name="price" value="" placeholder="Enter meal price"></td>
			</tr>
			<tr>
				<td>Image : </td>
				<td><input type="file" name="file" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input class="button" type="submit" name="insert" value="Insert"></td>
			</tr>
		</table>
	</form>
</div>

<?php
include("include/footer.php");
?>

