<?php
include("include/meta1.php");
include("include/header1.php");
?>

<style type="text/css">
	.container{
		margin-top: 50px;
		margin-left: 30%;
		margin-right: 20%;
		width: 40%;
		border: 1px solid lightgrey;
		padding: 10px;
	}
	@media screen and (max-width: 900px) {
    .container{
      margin-left: 20%;
      margin-right: 10%;
    }
  }
</style>
<div class="container">
<form method="post" action="login_do.php" enctype="multipart/form-data"> 
		<table>
		    <caption>Admin Login</caption>
			<tr>
				<td>Email : </td>
				<td><div class="form-group">
					<input class="form-control" type="email" name="email" value="" placeholder="Enter email">
				</div></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><div class="form-group">
					<input class="form-control" type="password" name="password" value="" placeholder="Enter password">
				</div></td>
			</tr>
			<tr>
				<td colspan="2"><input class="btn btn-primary" type="submit" name="login" value="Login"></td>
			</tr>
			
		</table>
</form>
</div>

<?php
include("include/footer.php");
?>
