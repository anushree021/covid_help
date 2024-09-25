<?php 
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
?>

<style>
h1
{ 
	text-align: center;
	font-weight: bold;
}
.main{
  background-color: rgba(250, 250, 250,.5);
  margin-left: 100px;
  margin-right: 100px;
  padding: 10px;
}
body
{
 background-image: url('https://image.shutterstock.com/image-photo/doctor-protect-family-icons-insurance-260nw-1898297899.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-top: 100px;
}
.container
{
/*position: fixed;
  left: 45%;*/
  display: flex;
  padding-left: 25%;
}
.dropdown{
  margin: 20px;
}
.dropdown-menu, .btn{
  font-size: 17px;
}
@media screen and (max-width: 900px) {
    .container{
      display: grid;
      padding-left: 5%;
    }
    .main{
      margin-left: 20px;
      margin-right: 20px;
    }
}
</style>

<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<div class="main" id="cont">
  <div><h1> Services we offer </h1></div>
  <div class="container" id="cont">
	<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Emergency Services
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="ambulance.php">Ambulance</a></li>
      <li><a href="hospitals.php">Hospital Bed</a></li>
      <li><a href="oxygen.php">Oxygen</a></li>
    </ul>
  </div>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Non-Emergency Services
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="medicine.php">Medicines</a></li>
      <li><a href="grocery.php">Groceries</a></li>
      <li><a href="healthy_meal.php">Healthy Meals</a></li>
    </ul>
  </div>
</div>
</div>

</body>
</html>