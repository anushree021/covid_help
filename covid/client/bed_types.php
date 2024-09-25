<style>
  .content
  {
    display: grid;
    grid-row-gap: 20px;
    color: black !important;
  }
  .item{
    background-color: rgba(255, 255, 255, 0.7);
    padding: 20px;
    font-size: 15px;
  }
  .item:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    cursor: pointer;
  }
  .type{
    font-size: 1.5em;
  }
  .proceed{
    font-size: 1.5em;
  }
  h2{
    text-align: center;
  }
  a{
    color:black;
  }
</style>

<?php 
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
//include("include/sidebar.php");

if(isset($_REQUEST['id']))
{
  $query="select * from bed_types where categories_id='".$_REQUEST['id']."' and status='1'";
  $result=mysqli_query($con,$query);

  $query1="select * from hospitals where id='".$_REQUEST['id']."' and status='1'";
  $result1=mysqli_query($con,$query1);
  $fetch1=mysqli_fetch_object($result1);
}

?>

<style type="text/css">
  body{
    margin-top: 60px;
    margin-right: 40px;
    margin-left: 40px;
    background-image: url("https://www.roadrunnerwm.com/hubfs/Hospital_Waste_Blog_01.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: 50% 50%;
  }

</style>
<body>
  <h2><?php echo $fetch1->categories; ?></h2>
  <div class="content">
            <?php while($fetch=mysqli_fetch_object($result)) {?>
            <div class="item">
                  <ul><p class="type"><b>Bed Type : </b> <?php echo $fetch->bed_type; ?></p>
                    <li><p><b>Description : </b><?php echo $fetch->description; ?></p></li>
                    <li><p><b>Vacant Beds : </b><?php echo $fetch->vacant_beds; ?></p></li>
                    <li><p><b>Charge : Rs </b><?php echo $fetch->price; ?></p></li>
                    <li><p><b>Last Updated : </b><?php echo $fetch->last_update; ?></p></li>
                    <p class="proceed"><a href="patientdetails.php?bed_id=<?php echo $fetch->id; ?>&amp hos_id=<?php echo $fetch->categories_id; ?>"><b>Proceed</b></a></p>
                  </ul>
            </div>
            <?php } ?>
  </div>
</body>
