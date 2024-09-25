<style>
  .container
  {
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: auto;
    opacity:1;
    color: black !important;

  }
  a{
    color:black;
  }
</style>

<?php 
include("connection.php");
include("include/meta.php");
include("include/header.php");
//include("include/sidebar.php");

if(isset($_REQUEST['id']))
{
  $query="select * from bed_types where categories_id='".$_REQUEST['id']."' and status='1'";
  $result=mysqli_query($con,$query);
}

?>

<style type="text/css">
  body{
    margin-top: 60px;
    background-image: url("https://www.roadrunnerwm.com/hubfs/Hospital_Waste_Blog_01.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: 50% 50%;
  }

</style>
<body>
  <div class="container">
            <div>
              <?php while($fetch=mysqli_fetch_object($result)) {?>
                  <p><?php echo $fetch->bed_type; ?></p>
                  <p><?php echo $fetch->description; ?></p>
                  <p><?php echo $fetch->vacant_beds; ?></p>
                  <p><?php echo $fetch->price; ?></p>
                  <p><?php echo $fetch->last_update; ?></p>
                  <p><a href="patientdetails.html">Proceed</a></p>
              <?php } ?> 
            </div>
  </div>
</body>
