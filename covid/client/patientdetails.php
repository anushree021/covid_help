<?php
include("connection.php");
include("include/meta1.php");
include("include/header1.php");

session_start();
$session=session_id();

?>   

<style type="text/css">

body{
	background-color: #fae3cd;
	font-family: 'Noto Serif', sans-serif;
	margin: 0 !important;
	margin-top:60px !important;
}
. Patient Details for Bed Booking{
  background:var(--#10B82E);
}

. Patient Details for Bed Booking .heading{
  color:#10B82E;
}

. Details for Bed Booking form{
  text-align: center;
}

.Patient Details for Bed Booking form .inputBox{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.Patient Details for Bed Booking form .inputBox input, select{
  height: 4rem;
  width:80%;
  padding:2 5rem;
  margin:1rem 0;
  font-size: 5.7rem;
  color:var(--#10B82E);
}

.Patient Details for Bed Booking form textarea{
  height:80rem;
  resize: none;
  padding:1rem;
  font-size: 5.5rem;
  width: 200%;
}

.Patient Details for Bed Booking form input[type="submit"]{
  width:80rem;
}

.Patient Details for Bed Booking form input[type="submit"]:hover{
  background:var(--#10B82E);
}


/* media queries  */

@media (max-width:768px){

  html{
    font-size: 60%;
  }

  header .fa-bars{
    display: block;
  }

  header .nav{
    position: fixed;
    top:-100rem; left:50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 0 100vh rgba(0,0,0,.3);
    border-radius: .5rem;
    border:.3rem solid var(--blue) !important;
    background:#10B82E;
    width: 95%;
    opacity: 0;
  }

  header .nav ul{
    width: 100%;
    flex-flow: column;
    padding:2rem 0;
  }

  header .nav ul li{
    width: 100%;
    text-align: center;
    margin:1rem 0;
  }

  header .nav ul li a{
    font-size: 3rem;
    display: block;
  }

  header .nav-toggle{
    top:50%;
    opacity: 1;
  }

  .Patient Details for Bed Booking form .inputBox input, select{
    width: 100%;
  }

  .Patient Details for Bed Booking form input[type="submit"]{
    width:200%;
  }

}


</style>

<body>

       
        <div class="col-md-6 pr-md-6" data-aos="zoom-in">
            <img src="C:/Users/DELL/Desktop/project/Doctors-cuate.svg" width="60%" alt="">
        </div>

            <h1 class="heading"><span>'</span> Nearby Beds Available  Using Your Location<span>'</span></h1>

            <div class="col-md-100" data-aos="flip-down">

<form action="payment_gateway/hospital_payment.php" method="post"> 
<center>
<h1 >Patient Information - Appointment BOOKING</h1>
	<table>

	  <tr>
		<td><input type="hidden" name="hospital_id" value="<?php echo $_REQUEST['hos_id'] ?>">
	  </tr>

	  <tr>
		<td><input type="hidden" name="bed_type_id" value="<?php echo $_REQUEST['bed_id'] ?>">
	  </tr>

		<tr>
		<td> Patient Name</td>
		<td><input type="text" name="firstname" placeholder="Enter the  patient name" required>
		</td></tr>

		<tr>
		<td>Patient Age</td>
		<td><input type="number" name="age"></td>
		</tr>
		     
		</tr>
		<tr>
		<td>Patient Phone no</td>
		<td><input type="tel" name="phone" placeholder="Enter Mobile number here" required>
		    
		</tr>

		<tr>
		<td> Patient Email</td>
		<td><input type="email" name="email" placeholder="Enter the  patient email" required>
		</td></tr>

		<tr>
		<td>Patient's Relative Phone no</td>
		<td><input type="tel" name="r_phone" placeholder="Enter Mobile  number here" required>
		    
		</tr>

		<tr>
			<td>Patient Gender</td>
			<td><input type="text" list="gender" name="gender" autocomplete="on" placeholder="gender" required>
			<datalist id="gender">
  			<option value="Female">
		  	<option value="Male">
  			<option value="Others">
  			
			</datalist>
			</td>
		</tr>
		<tr>
			<td>Patient Blood Group</td>
			<td><input type="text" list="Blood group" name="blood_group" autocomplete="on" placeholder="Blood Group" required>
			
		</tr>
		<tr>
        <td>Patient'sBody temperature(°C)</td>
       <td>		
		<input type = "range" name = "point" min = "0" max = "105" required>
		
		</td></tr>
		
		<tr>
			<td>Patient Heart Rate (beats per minute, or BPM)</td>
			<td><input type="text" list="Pulse Rate" name="heart_rate" autocomplete="on" placeholder="Pulse Rate" required>
			<datalist id="Pulse Rate">
  			<option value="100 - 140 bpm">
			<option value="95 - 133 bpm">
			<option value="90 - 126 bpm">
			<option value="85 - 119 bpm">
			<option value="85 - 119 bpm">
			<option value="80 - 112 bpm">
			<option value="75 - 105 bpm">
			<option value="70 - 98 bpm">
			<option value="65 - 91 bpm">
			
		  
  			
			</datalist>
			</td>
		</tr>
		<tr>
			<td>SPO2 (percentage  or,%)</td>
			<td><input type="text" list="Oximeter Reading" name="spo2" autocomplete="on" placeholder="Oximeter Reading" required>
			<datalist id="Oximeter Reading">
  			<option value="95-100%">
			<option value="91-95%">
			<option value=">=90%">
			<option value=">=80%">
			<option value=">=70%">
			
			
		  
  			
			</datalist>
			</td>
		</tr>
		 <input type="hidden" name="productinfo" value="test">
     <input type="hidden" name="amount" value="500">
     <input type="hidden" name="surl" value="http://localhost/covid/client/payment_gateway/hospital_success.php">
     <input type="hidden" name="furl" value="http://localhost/covid/client/payment_gateway/failure.php">
     <p>
         You will be charged INR 500 in advance for booking service.
     </p>


<tr>Patient Current Location,Share the link of current location</tr>
</td>
<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
<tr>
<a href="file:///C:/Users/DELL/Desktop/project/beds%20page.html">
<button type="submit" name="submit" id="" value="make appointment" class="button">Proceed to Payment</button>
</a>
</tr>

</table>	
</center>
</form>

                    

            </div>

        </div>

    </div>

</section>


</section>
	</header>
</body>
</html>
