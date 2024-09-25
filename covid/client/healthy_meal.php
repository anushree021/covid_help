<?php
session_start();
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
include("include/sidebar2.php");

$query="select * from meal_category where status='1'";
$result=mysqli_query($con,$query);
?>

<style type="text/css">
  body{
    background-image: url(https://img.freepik.com/free-photo/healthy-ingredients-white-wooden-desk_23-2148194994.jpg?size=626&ext=jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  .grid-box{
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-gap: 20px;
  }
  .grid{
    border: 1px solid black;
    text-align: center;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.7);
  }
  .grid:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .grid img{
    max-width: 100%;
    max-height: 100%;
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
      grid-template-columns: auto auto;
      grid-gap: 10px;
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
  <div id="<?php echo $fetch->c_name;?>" class="title"><?php echo $fetch->c_name;?></div>
  <br>
  <div class="grid-box">
    <?php 
    $query1="select * from healthy_meal";
    $result1=mysqli_query($con,$query1);
    while($fetch1=mysqli_fetch_object($result1)) {
    if($fetch1->c_id==$fetch->c_id) {
    ?>
    <div class="grid">
      <div><img src="../server/item_image/<?php echo $fetch1->image; ?>" alt="Image"></div>
      <div><?php echo $fetch1->hm_name?></div>
      <div><?php echo $fetch1->descrip?></div>
      <div>₹<?php echo $fetch1->price?>.00</div>
      <div><a href="payment_gateway/cart.php?item_id=<?php echo $fetch1->hm_id; ?>&amp table_id=3">Add to Cart</a></div>
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
