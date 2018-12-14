<?php
	require 'connect.php';
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
      
      
    $email=$_POST['email'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['password'];
	$mobno=$_POST['mobno'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
      

	$check = "SELECT Email from customer WHERE Email='$email'";
	$temp = $mysqli->query($check);
	if($temp->num_rows == 0)
	{
		if($mysqli->error == 0)
		{
			$sql = "INSERT INTO customer VALUES (default,'$email', '$pass', '$fname','$lname','$gender','$city','$mobno')";
			$result = $mysqli->query($sql);
			if($result)
			{
				echo '<script language="javascript">';
				echo 'alert("You are successfully registered!")';		
				echo '</script>';
				
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Error!")';
				echo '</script>';
			}
		}
	}
	else
	{
				echo '<script language="javascript">';
				echo 'alert("Email already in use, Sign up or Register with different Email")';
				echo '</script>';
	}
}

?>

<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<title>Sign Up</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">
<style>
::-webkit-scrollbar{
	display:none;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
.ui-datepicker { font-size:8pt !important}
body, html {
    height: 100%;
    color: #777;
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
  <ul class="w3-navbar w3-text-white" id="myNavbar">
    <li><a href="index.php" class="w3-padding-large">HOME</a></li>
    <li><a href="signup.php" class="w3-padding-large w3-dark-grey">SIGN UP</a></li>
    <li class="w3-hide-small w3-right">
      <a href="login.php" class="w3-padding-large w3-red w3-hover-text-black">LOG IN & BOOK ROOM</a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">SIGNUP<span class="w3-hide-small"></span> </span>
  </div>
</div>


<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
<h3 class="w3-center"><img src="logo.png" height="50"><br>We need some info about you</h3>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-center m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
      
      	<form name ="signup" method="post" action="">
        <p><center><input class="w3-input-group w3-input " type="text" name="email" placeholder="Email" style="width:60%" required><br>
        </p>
        <p><input class="w3-input-group w3-input" type="password" name="password" placeholder="Password" style="width:60%" required><br>		
        </p>
        <p><input class="w3-input-group w3-input" type="text" name="fname" placeholder="First Name" style="width:60%" required><br>		
        </p>
        <p><input class="w3-input-group w3-input" type="text" name="lname" placeholder="Last Name" style="width:60%" required><br>		
        </p>
        <p>Gender:<br><input class="w3-input-group" type="radio" name="gender" value="Male" required>Male</input>
        			  <input class="w3-input-group" type="radio" name="gender" value="Female">Female</input>  </p>
        <p><input class="w3-input-group w3-input" type="text" name="city" placeholder="City" style="width:60%" required><br>		
        </p>
         <p><input class="w3-input-group w3-input" type="number" name="mobno" placeholder="Mobile No." style="width:60%" maxlength="10" pattern="[0-9]{16}" required><br>		
        </p>
        </center>
         </div>
      
      <input type="submit" value="Submit" class="w3-btn w3-section w3-center"></input>

      </form>
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
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", " w3-text-white");
    }
}
</script>

</body>
</html>
