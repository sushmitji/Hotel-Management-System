<?php
	include 'connect.php';
	session_start();


?>


<!DOCTYPE html>
<html>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">
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
    background-image: url('image.jpg');
    min-height: 30%;
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
      <a href="manager.php" class="w3-padding-large w3-white w3-hover-text-black"><?php echo $_SESSION['recepname']; ?></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">MY<span class="w3-hide-small">  HOME</span> </span>
  </div>
</div>


<!-- Container (Section) -->
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <p>
  <li class="w3-padding-xlarge w3-center w3-deep-purple"><a href="userhome.php" style="text-decoration: none">My Home</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="allotroom.php" style="text-decoration: none">Allot Room</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="recepcustomer.php" style="text-decoration: none">Customer Details</a></li>  
  <li class="w3-padding-xlarge w3-center"><a href="bill.php" style="text-decoration: none">Print Bills</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="receproom.php" style="text-decoration: none">Room Details</a></li>

  </p>
  </ul>
  </div>
  	<div class="w3-col m8 w3-container">
  	
  	<p class="w3-center"><em>Customer Details.....<em></p>

  	
	
  	

	<div class="w3-container">
  

  <table class="w3-table-all w3-card-4">
    <tr>
      <th> Bill no</th>
      <th>Booking ID</th>
      <th>Cust ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Roomno</th>
      <th>Tariff</th>
      <th>Service charges</th>
     
      </tr>
     
      <?php 
     $sql="SELECT Billno,BookingID,CustID,FirstName,LastName,Roomno,Tariff,Servicecharges FROM bill NATURAL JOIN customer";
    
  	$result = $mysqli->query($sql) or die("BOOM");
  	$result1=mysqli_num_rows($result);
  	

      while($row=mysqli_fetch_assoc($result)) 
     { 
    
    	echo'<tr>';
        

		echo '<td>' . $row['Billno'] . '</td>';
		echo '<td>' . $row['BookingID'] . '</td>';
		echo '<td>' . $row['CustID'] . '</td>';
    echo '<td>' . $row['FirstName'] . '</td>';
    echo '<td>' . $row['LastName'] . '</td>';
		echo '<td>' . $row['Roomno'] . '</td>';
		echo '<td>' . $row['Tariff'] . '</td>';
    echo '<td>' . $row['Servicecharges'] . '</td>';
      
      	echo '<td><a href="exp2.php?id=' . $row['Billno'] . '">Print Bill</a></td>';

		//echo '<td><a href="delete.php?id=' . $row['Roomno'] . '">Delete</a></td>';

      echo'</tr>';
    }
    ?>
    
  </table>
</div>








  	</div>
   </div>      
      	
  
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

