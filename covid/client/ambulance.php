<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

session_start();
$session=session_id();

?>                  

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<style>
h1, h2, h3
{
    font-family: 'Bebas Neue', cursive;
text-align: center;
font-weight: bolder;
color: rgb(156, 0, 0);
text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;

}
div
{
    /*font-variant: small-caps;*/
    font-size: 20px;
    color: black;
    font-family: 'Encode Sans SC', sans-serif;
    text-align: center;
    display: block;
    margin: 0 auto;
}
p
{
    font-size: 20px;
    color: black;
    font-family: 'Encode Sans SC', sans-serif;
    text-align: center;
    display: block;
    margin: 0 auto;
}
main
{
    color: whitesmoke;
    background-color: rgb(250, 250, 250,.5);
    margin-top: 30px;
    margin-left: 300px;
    margin-right: 300px;

}
body
{
    
background-image: url("images1/ambulance_bg.jpeg");
background-repeat:round;
}
#confirmation 
{

    color: whitesmoke;
    display: block;
    margin: 0 auto;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 5px;
    padding-bottom: 5px;
    background-color: rgb(8, 20, 20);
}
a
{

    color: rgb(0, 0, 0);
    text-decoration: none;
}
</style>
</head>

<main>
    <br>
    <br>
    <h1> AMBULANCE BOOKING SERVICE </h1>
    
    <h3>*Immediate Dispatch Service*</h3>
    <br>
    <br>

    <form action="payment_gateway/ambulance_payment.php" method="POST"> 
        <div>
            <label for="Type">Ambulance Type :</label>
            <select name="AmbType" id="Type">
                <option value="PTS">Patient Transport Service <br> <br> (Non AC with stretcher for transportation)</option>
                <option value="BLS">Basic Life Support (AC, equpped with basic medical equipment  </option><!--selected means automatically will get selected-->
                <option value="PTS">Advance Life Support (AC, equipped with ICU grade equipment)      </option>
            </select>
            <br>
        <br>
        
        
         <div>
            Name of the Patient : &nbsp; <br><br> <input type="text" name="firstname">
        </div>
        
        <br>
        
        <br>
        <div>
            Contact Number : &nbsp; <br><br> <input type="number" name="phone">
        </div>
        
        <br>
        <div>
            Email Id : &nbsp; <br><br> <input type="email" name="email">
        </div>
        
        <br>
        <div>
            Patient's Age : &nbsp; <br><br> <input type="number" name="age">
        </div>
        
        <br>
        <div>
           Pick-Up Address : &nbsp; <br><br> <textarea name="Pickupadd"  cols="30" rows="5"></textarea>
        </div>
        
        <br>
        <div>
            Drop Address : &nbsp; <br> <br> <textarea name="Dropadd"  cols="30" rows="5"></textarea>
        </div>
        <br>

        <div>
        <input type="checkbox" name="eligibility"> I have read the <a href="terms and condition.html" target="_blank"> terms and conditions. </a> &nbsp
     </div>
     <br>
     <input type="hidden" name="productinfo" value="test">
     <input type="hidden" name="amount" value="500">
     <input type="hidden" name="surl" value="http://localhost/covid/client/payment_gateway/ambulance_success.php">
     <input type="hidden" name="furl" value="http://localhost/covid/client/payment_gateway/failure.php">
     <p>
         You will be charged INR 500 in advance for booking service.
     </p>
        <div>
       <input id=confirmation type="submit" name="submit" value="Proceed to Payment">
       </div>
    <br>
    <br>

</main>
</body>
</html>