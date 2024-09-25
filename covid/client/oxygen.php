<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

session_start();
$session=session_id();

?>                  

<style>

body
{
	text-align: center;
	background-image: url("https://previews.123rf.com/images/krishnacreations/krishnacreations1409/krishnacreations140900419/31906870-digital-illustration-of-oxygen-cylinder-in-colour-background.jpg");
	/*font-family: cursive;*/
	font-size: 20px;
	color: black;
}
main
{
    background-color: rgb(250, 250, 250,.5);
    margin-top: 30px;
    margin-left: 300px;
    margin-right: 300px;

}

</style>
</head>

<body>
<main>
    <br>
    <br>
    <h1> OXYGEN BOOKING SERVICE </h1>
    
    <h3>*Immediate Dispatch Service*</h3>
    <br>
    <br>

    <form action="payment_gateway/oxygen_payment.php" method="POST"> 
        <div>
        
        
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
            Patient's Age : &nbsp; <br><br> <input type="number" name="Age">
        </div>
        
        <br>
        <div>
            Address : &nbsp; <br><br> <textarea name="Address"  cols="30" rows="5"></textarea>
        </div>
        
        <br>

        <div>
            <label for="Type">Cylinder Type :</label>
            <select name="Type" id="Type">
                <option value="10.2_Litres_Mild_Steel">10.2 Litres(B Type) Mild Steel (Without Valve and Cap) -> Rs.4500 </option>
                <option value="46.7_Litres_Steel"> 46.7 Litres(D Type) Mild Steel(Without Valve and Cap) -> Rs.8500 </option>
                <option value="4.5_Litres_Almunium">4.5 Litres Almunium -> Rs.4500  </option>
            </select>
            <br>
        <br>

        <div>
            Cylinder Qty : &nbsp; <br> <br> <input type="number"  name="Cylinder">
        </div>
        <br>

        <div>
        <input type="checkbox" name="eligibility"> I have read the <a href="terms_conditions.html" target="_blank"> terms and conditions. </a> &nbsp; 
     </div>
     <br>
     <input type="hidden" name="productinfo" value="test">
     <input type="hidden" name="amount" value="500">
     <input type="hidden" name="surl" value="http://localhost/covid/client/payment_gateway/oxygen_success.php">
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