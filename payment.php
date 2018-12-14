<?php
	include 'connect.php';
	session_start();



	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
      //payment details sent from form
      
      $_SESSION['cardno'] = $_POST['cardno']; 
      header("Location: paymentprocess.php");
      
    }
      
?>
<!DOCTYPE html>
<html>
<title>Book room</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>


<style>
::-webkit-scrollbar { 
    display: none; 
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
.ui-datepicker { font-size:8pt !important}
body, html {
    height: 100%;
    color: black;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('payment.jpg');
    min-height: 40%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img_parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img_parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%);
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-small w3-right">
      <a href="logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
    <li class="w3-hide-small w3-right">
      <a href="cust.php" class="w3-padding-large w3-white w3-hover-text-black"><?php echo $_SESSION['custname']; ?></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">BOOK<span class="w3-hide-small">  ROOM</span> </span>
  </div>
</div>


<!-- Container (Booking Section) -->
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container w3-section">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <li class="w3-padding-xlarge w3-center"><a href="userhome.php" style="text-decoration: none">My Home</a></li>
  <li class="w3-padding-xlarge w3-center w3-deep-purple"><a href="bookroom.php" style="text-decoration: none">Book room</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="bookedhistory.php" style="text-decoration: none">Booked History</a></li>
  </ul>
  </div>
  	<div class="w3-col m2 w3-container w3-section">
  	</div>
  <div class="w3-col m4 w3-container w3-section">
<ul class="w3-card-16 w3-ul">
  <li class="w3-padding-large">
  <form name ="payment" method="post" action="">
  		
  <li class="w3-padding-large">
  		<p>
  			<b>Card no:</b><i>(16-digit card number)</i><br>
  			<input class="w3-input-group w3-input w3-animate-input" type="text" name="cardno" placeholder="Card number" required pattern="[0-9]{16}" maxlength="16">
  		</p>
   </li>

   <li class="w3-padding-large">
   		<p>
  			<b>Name on card:</b>
  			<input class="w3-input-group w3-input w3-animate-input" type="text" name="name" placeholder="Name" required>
  		</p>

   </li>
   <li class="w3-padding-large">
   		 <p>
   		 	<b>Expiry Date:</b>
   		 	<select name="month" class="w3-select" style="width:50px" required>
			  <option value="01">01</option>
			  <option value="02">02</option>
			  <option value="03">03</option>
			  <option value="04">04</option>
			  <option value="05">05</option>
			  <option value="06">06</option>
			  <option value="07">07</option>
			  <option value="08">08</option>
			  <option value="09">09</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			</select>
			<select name="year" class="w3-select" style="width:70px" required>
			  <option value="2016">2016</option>
			  <option value="2017">2017</option>
			  <option value="2018">2018</option>
			  <option value="2019">2019</option>
			  <option value="2020">2020</option>
			  <option value="2021">2021</option>
			  <option value="2022">2022</option>
			  <option value="2023">2023</option>
			  <option value="2024">2024</option>
			  <option value="2025">2025</option>
			  <option value="2026">2026</option>
			  <option value="2027">2027</option>
			  <option value="2028">2028</option>
			  <option value="2029">2029</option>
			  <option value="2030">2030</option>
			  <option value="2031">2031</option>
			  <option value="2032">2032</option>
			  <option value="2033">2033</option>
			  <option value="2034">2034</option>
			</select>

    </li>
    <li class="w3-padding-large">
   		<p>
  			<b>CVV</b> <i>(3-digit CVV present at the back of your card)</i>
  			<input class="w3-input-group w3-input" style="width:70px" type="text" name="cvv" placeholder="CVV" required pattern="[0-9]{3}" maxlength="3">
  		</p>

   </li>
    </ul>
    <p>
    	<button type="button" value="Cancel" class="w3-btn w3-section w3-left" onclick="location='bookroom.php'">Cancel</button></p>
    	<input type="submit" value="Submit" class="w3-btn w3-section w3-right">
    </form>


  
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>

