<?php
session_start();
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
include("include/sidebar3.php");

$query="select * from symptom where status='1'";
$result=mysqli_query($con,$query);
?>

<style type="text/css">
  body{
    background-image: url(https://image.freepik.com/free-photo/bunch-of-colorful-medical-pills-on-white-background-closeup-healthcare-and-medicine-medical-pharmacy-concept-health-day_97729-336.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  .main{
    padding-left: 120px;
    padding-right: 120px;
  }
  .grid-box{
    display: grid;
    grid-template-columns: auto;
    grid-gap: 20px;
  }
  .grid{
    border: 1px solid black;
    cursor: pointer;
    padding: 20px;
    display: grid;
    grid-template-columns: 20% 50% 30%;
    grid-gap: 15px;
    background-color: rgba(255, 255, 255, 0.7);
  }
  .grid:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .grid img{
    max-width: 60%;
    max-height: 60%;
  }
  .details{
    display: grid;

  }
  .title{
    text-align: center;
    font-weight: bold;
  }
  .viewcart{
    float: right;
    color: black;
  }
  @media screen and (max-width: 900px) {
    .grid-box{
      grid-template-columns: auto;
      grid-gap: 10px;
    }
    .main{
      padding-left: 50px;
      padding-right: 50px;
    }
  }
</style>

<body>

<div id="main" class="main">
  <a href="payment_gateway/view_cart.php" class="viewcart">
  <?php
  $_SESSION['cart']=session_id();
  $query="SELECT id FROM `order_session` WHERE session='".$_SESSION['cart']."'";
  $orders_select=mysqli_query($con,$query);
  $c = mysqli_num_rows($orders_select);
  echo $c;
  ?><i class="fa fa-shopping-cart" style="font-size:24px"></i> View Cart</a>
  
  <?php while($fetch=mysqli_fetch_object($result)) {?>
  <div id="<?php echo $fetch->name;?>" class="title"><?php echo $fetch->name;?> Reliefs</div>
  <br>
  <div class="grid-box">
    <?php 
    $query1="select * from medicine";
    $result1=mysqli_query($con,$query1);
    while($fetch1=mysqli_fetch_object($result1)) {
    if($fetch1->symptom_id==$fetch->id) {
    ?>
    <div class="grid">
      <div class="image">
        <div><img src="../server/item_image/<?php echo $fetch1->image; ?>" alt="Image"></div>
      </div>
      <div class="details">
        <div><b><?php echo $fetch1->med_name?></b></div>
        <div style="font-size: 17px;"><?php echo $fetch1->descrip?></div>
        <div><b>₹<?php echo $fetch1->price?>.00</b></div>
      </div>
      <div class="cart">
        <div><a href="payment_gateway/cart.php?item_id=<?php echo $fetch1->med_id; ?>&amp table_id=1">Add to Cart</a></div>
      </div>
    </div>
    <?php 
    }
    }
    ?>
  </div>
  <br><hr>
  <?php }?>
</div>
   
</body>
</html> 
