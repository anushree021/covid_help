<?php 
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

if(isset($_POST['send'])){
	$query="insert into contact set name='".$_POST['name']."', email='".$_POST['email']."', message='".$_POST['message']."'";
	mysqli_query($con,$query);
}
?>
<style>
	body
	{
		padding-top:50px;
		background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20200805/pngtree-vector-design-background-medical-instruments-for-vaccine-image_384915.jpg");
		background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
	} 
    .contact{
		/*position: relative;
		display: flex;
		justify-content: center;
		align-items: center;*/
		margin-right: 120px;
		margin-left: 120px;
	}

	.container1{
		display: grid;
		grid-template-columns: auto auto;
		padding: 30px;
		background-color: rgba(250, 250, 250,.5);
		font-size: 15px;
		margin-bottom: 20px;
	}
	.contactForm{
		background-color: white;
		margin: 30px;
		padding: 30px;	
	}
	.contactInfo{
		color: black;
	}
	h2, form h3{
		text-align: center;
		color: black;
	}
	.btn-primary{
		background-color: gold;
		border-color: gold;
	}
	.btn-primary:hover{
		background-color: goldenrod;
		border-color: goldenrod;
	}
	.submit-btn{
		align-content: center;
	}

</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>	
</head>
<body>
	<div class="contact">
		<div>
			<h2>Contact Us</h2>
		</div>
		<div class="container1">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker-alt"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>4671 Sugar Camp Road</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone fa-flip-horizontal"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>507-457-1234</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>hilfe@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="contactForm">
				<form action="" method="post">
					<h3>Send Message</h3>
					<div class="form-group">
						<p>Full Name</p>
						<input type="text" class="form-control" name="name" placeholder="Full Name" required="">
					</div>
					<div class="form-group">
						<p>Email address</p>
						<input type="text" class="form-control" placeholder="Email" name="email" required="">
					</div>
					<div class="form-group">
						<textarea required="" class="form-control" name="message">Type your Message..</textarea>
					</div>
					<div class="submit-btn">
						<input type="submit" class="btn btn-primary" name="send" value="Send">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

	