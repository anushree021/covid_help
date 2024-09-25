<?php 
include("connection.php");
include("include/meta1.php");
include("include/header1.php");
?>

<style type="text/css">
	body{
		background-color:white;
    margin-top: 50px;
	}
  h1
  {
    font-family: Lucida Handwriting;
  }
  #g
  {
    color: lavender;
    font-weight: bold;
    font-family: Times new roman;
  }
  #h
  { bottom-padding:65px;
    color: black;
    font-weight: bold;
    font-family: Times new roman;
  }
   #c 
  {
  	text-align:center;
  }
  #i
  {
    color: white;
    font-family: Lucida Handwriting;
    text-align:left;
  }
  #j
  {
  	font-family:URW Chancery L;
  	color:black;
font-size:20px;
font-weight:bold;
background-image:url("https://thumbs.dreamstime.com/b/medical-concept-blue-background-doctor-s-desk-instruments-copy-space-133143854.jpg");
  }
  #k
  {
    color: black;
    font-family: Lucida Handwriting;
    text-align:left;
  }

 
  .sidenav
  {
    padding-top: 20px;
    background-color: #f1f1f1;
    height: 100%
  }
  .stay-safe{
    width: 60vw;
  }

</style>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images1\photo1627732754.jpeg" alt="Los Angeles" >
        <div class="carousel-caption">
        <h1>Hilfe</h1>
        <div id="g">
        <p><h4>Welcome to our COVID resource page!</p><p> We ensure to work round the clock so that you dont have to stress about getting your necessary things done.</p>
         <p> The world has been wrecked by the COVID-19 pandemic. Everyday is a constant battle for surviving in a safe and healthy way.
            <p> Let's join hands and try to make a future free from this deadly pandemic</p></p></h4>
         </p></div>
        </div>
      </div>


      <div class="item">
        <img src="images1\photo1627732790.jpeg" style="width:100%;">
        <div class="carousel-caption">
        <div id="h"> <h1>Hilfe</h1>
        <p><h3>We are always happy to help. <p>We provide round-the-clock service of fresh vegetables and healthy meals</p> <p>Everything is just a click away!
        </div>
      </div></div>
    
      <div class="item">
        <img src="images1\makingmedicines784.jpg" alt="New york" style="width:100%; height:50%;">
        <div class="carousel-caption">
        <h1>Hilfe </h1>
        <div id="h">
        <p> <h3>  We all know how the role medicines play in our life during this time. </h3></p>
        <p> <h3> So, to make everyone's lives easier, we have decided to deliver medicies that comes with great discounts! </h3>
        </div></p></div>
      </div>
      <div class="item">
        <img src="images1\photo1627732818.jpeg" alt="New york" style="width:100%; height:50%;">
        <div class="carousel-caption">
        
        <p>Your go-to COVID essentials website</p>
        </div>
      </div>
    </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 

    <div class="container text-center">
         <div class="col-sm-2 sidenav" id="col1">
         <p>
             <div id="k">
         Our doctors and frontline workers are working hard day and night to ensure that we stay safe. Let us do what we can to stop the spread of this deadly disease.Only step out when absolutely necessary, Practice social distancing, and dont forget to wear a mask.  </p>
         <a href="guidance.php"> <img src=" https://www.easa.europa.eu/sites/default/files/styles/main_view/public/ifu/EASA-website-guidance-news-item_0.jpg?itok=Z30b3mTL" height="100" width="120">  </a>
        

          </div></p></div>





         <div class="col-sm-8" id="col2">
          <p> <div id="j">
          <p>	The COVID-19 pandemic has led to a dramatic loss of human life worldwide and presents an unprecedented challenge to public health, food systems and the world of work. The economic and social disruption caused by the pandemic is devastating.
          	The pandemic has been affecting the entire food system and has laid bare its fragility. So, we as a tem of six members have decided to help people
          	in whatever small ways we can. Because as we all know, a little help goes a long way. This website is intended to help covid positive patients
          	find the right amount of balanced meals and medicines. 
         <br> 	We also took care to include other necessary things for people without COVID-19 as well. </p> </div>

          
          	<h2>COVID-19 Guidelines </h2> 
          	<div id="i">
    

        <p></div>
        <hr> <img class="stay-safe" src="https://image.freepik.com/free-vector/people-holding-stay-home-stay-safe-wear-mask-boards-covid-19-coronavirus-illustration_107355-372.jpg"></p> </div> </p>
        <div class="col-sm-2 sidenav" id="col3"><div id="k"> We specialize in delivering essential commodities like medicines and vegetables, for covid positive patients.
    <br> Along with that, we have alot of other facilities for the general masses as well. To know about some COVID-19 mythbusters, click here <br>
     <a href="mythbusters.php"> <img src="https://www.hpsj.com/wp-content/uploads/2020/03/myth-icon-01.png" height="100" width="120"> </div>
</div></div> </div>
</body>
</html>

<?php
include("include/footer.php");
?>