<?php
	include 'connect.php';
	session_start();
  $billno = $_GET['id'];

  $sql = "SELECT * FROM bill WHERE Billno=".(int)$billno;
  $result=$mysqli->query($sql);
  $result=$result->fetch_assoc();


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
    $servicecharges = $_POST['servicecharges'];

    $query = "UPDATE bill SET Servicecharges=".(int)$servicecharges." WHERE Billno=".(int)$billno;
    $result2 = $mysqli->query($query) or die("BOOM");
    echo '<script>';
    echo 'alert("Bill updated successfully");';
    echo '</script>';
      
  }
      
?>
<!DOCTYPE html>
<html>
<title>Edit Bill</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    echo '<script>';
    echo 'window.location.assign("bill.php");';
    echo '</script>';
  }
  ?>

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
    background-image: url('bill.jpg');
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
      <a href="cust.php" class="w3-padding-large w3-white w3-hover-text-black"><?php echo $_SESSION['recepname']; ?></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">EDIT<span class="w3-hide-small">    BILL</span> </span>
  </div>
</div>


<!-- Container (Booking Section) -->
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container w3-section">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <li class="w3-padding-xlarge w3-center"><a href="recephome.php" style="text-decoration: none">Receptionist Home</a></li>
 
  <li class="w3-padding-xlarge w3-center"><a href="recepcustomer.php" style="text-decoration: none">Customer Details</a></li>  
  <li class="w3-padding-xlarge w3-center  w3-deep-purple"><a href="bill.php" style="text-decoration: none">Bills</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="receproom.php" style="text-decoration: none">Room Details</a></li>
  </ul>
  </div>
  	<div class="w3-col m2 w3-container w3-section">
  	</div>
  <div class="w3-col m4 w3-container w3-section">
<ul class="w3-card-16 w3-ul">
  <li class="w3-padding-large">
  <form id="empdetails" name ="empdetails" method="post" action="">
  		
  <li class="w3-padding-large">
  		<p>
  			<b>Billno:</b> <?php echo $result['Billno']; ?><br>
  		</p>
   

  
      <p>
        <b>CustID:</b> <?php echo $result['CustID']; ?><br>
      </p>
   

      

   
      <p>
        <b>Roomno:</b> <?php echo $result['Roomno']; ?><br>
      </p>
  

 
      <p>
        <b>Tariff:</b> <?php echo $result['Tariff']; ?><br>
      </p>
   

   

   
      <p>
        <b>Card no:</b> <?php echo $result['Cardno']; ?><br>
      </p>
   </li>
    <li class="w3-padding-large">
      <p>
        <b>Service charges:</b> <input name="servicecharges" type="number" class="w3-input" value="<?php echo $result['Servicecharges']; ?>"><br>
      </p>
   </li>



    </ul>
    <p>
    	<button type="button" value="Cancel" class="w3-btn w3-section w3-left" onclick="location='bill.php'">Cancel</button></p>
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

