<?php
  include("connection.php");

  $query1="select * from grocery_category where status='1'";
  $result1=mysqli_query($con,$query1);

  $query2="select * from meal_category where status='1'";
  $result2=mysqli_query($con,$query2);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
  font-family: "Lato", sans-serif;
  padding-top: 65px;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #131414;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top: 50px;
  transition: 0.5s;
}

.sidenav button{
  padding: 0px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  transition: 0.3s;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: white;
}

/* Sidenav close button */
.sidenav .closebtn {
  text-align: right;
  position: absolute;
  top: 0;
  font-size: 30px;
}

/* Sidenav open button */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

/* Main content */
.main {
  transition: margin-left .5s;
  margin-left: 0; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 20px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #d9c582;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-width: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .main{padding: 0px 10px; font-size: 18px;}
}
</style>

<body>

<div id="sidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <br>
  <button class="dropdown-btn"><a href="./grocery.php">Grocery</a><i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <?php while($fetch1=mysqli_fetch_object($result1)) {?>
    <a href="#<?php echo $fetch1->c_name; ?>"><?php echo $fetch1->c_name?></a>
    <?php }?>
  </div>
  <button class="dropdown-btn"><a href="./healthy_meal.php">Healthy Meal</a><i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <?php while($fetch2=mysqli_fetch_object($result2)) {?>
    <a href="#<?php echo $fetch2->c_name; ?>"><?php echo $fetch2->c_name?></a>
    <?php }?>
  </div>
  <a href="#">About</a>
</div>

<div id="main" class="main"> 
  <button class="openbtn" onclick="openCloseNav()">☰</button> 
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("mouseenter", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

function openCloseNav() {
  var sidenav=document.getElementById("sidenav");
  var main=document.getElementById("main");
  if(sidenav.style.width=="0" && main.style.marginLeft=="0"){
    sidenav.style.width = "250px";
    main.style.marginLeft = "250px";
  }
  else{
    sidenav.style.width = "0";
    main.style.marginLeft = "0";
  }
}

</script>

</body>
</html> 