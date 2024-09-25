<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
@session_start();
#if($_SESSSION['role']=='' || $_SESSSION['role']!='admin') #check if current logged in user is not admin
#{
#	header("location:login.php");
#}
?>

<style type="text/css">
    h2{
        text-align: center;
    }
    .container{
    padding-left: 120px;
    padding-right: 120px;
  }
  .menubar{
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 20px;
  }
  .item{
    border: 1px solid black;
    padding: 20px;
    text-align: center;
  }
  .item:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  @media screen and (max-width: 900px) {
    .container{
      padding-left: 50px;
      padding-right: 50px;
    }
  }
</style>

<div class="title">
	<h2>Welcome Admin!</h2>
</div>

<div class="container">
<div class="menubar">
    <div class="item"><a href="./">HOME</a></div>
    <div class="item"><a href="grocery.php">Grocery</a></div>
    <div class="item"><a href="grocery_category.php">Grocery Category</a></div>
    <div class="item"><a href="healthy_meal.php">Healthy Meals</a></div>
    <div class="item"><a href="meal_category.php">Healthy Meals Category</a></div>
    <div class="item"><a href="medicine.php">Medicine</a></div>
    <div class="item"><a href="symptom.php">Symptom</a></div>
    <div class="item"><a href="ambulance_customer.php">Ambulance Customer</a></div>
    <div class="item"><a href="hospital_patients.php">Hospital Patients</a></div>
    <div class="item"><a href="oxygen_customer.php">Oxygen Customer</a></div>
    <div class="item"><a href="contact_message.php">Contact Messages</a></div>
</div>
</div>

<?php
include("include/footer.php");
?>

