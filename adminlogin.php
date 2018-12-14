<?php
	include 'connect.php';
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
      // email and password sent from form 
      
      $email = $_POST['email'];
      $password = $_POST['password']; 
      $choice = $_POST['employee'];
      if($choice=="manager")
      {
        $sql = "SELECT * FROM manager WHERE Email='$email' AND Password='$password'";
        $result = $mysqli->query($sql) or die("BOOM");
        if ($result->num_rows == 1) 
        {
          //To store name too:
          $manager = $result->fetch_assoc();

          $id= $manager['EmpID'];
          
          $query = "SELECT * FROM employee WHERE EmpID=". (int) $id. ";";

          $result2=$mysqli->query($query) or die("Blah BLah k");
          $result2->num_rows;
          $final = $result2->fetch_assoc();

          $_SESSION['managername']=$final['FirstName']." ".$final['LastName'];
          $_SESSION['user'] = $email;

          $name=$_SESSION['managername'];

         echo "Logged in. Welcome" .$name;
        header("location: managerhome.php");
        }
        else 
        {
        echo '<script language="javascript">';
        echo 'alert("Email or Password entered is invalid. Please try again.")';
        echo '</script>';
        }
      }
      else
      {
        $sql = "SELECT * FROM receptionist WHERE Email='$email' AND Password='$password'";
        $result = $mysqli->query($sql) or die("BOOM");
      
        if ($result->num_rows == 1) 
      	{
      		//To store name too:
          
      		$receptionist = $result->fetch_assoc();
          $id= $receptionist['EmpID'];

          $query = "SELECT * FROM employee WHERE EmpID=". (int) $id. ";";

          $result2=$mysqli->query($query) or die("Blah BLah k");
          $final = $result2->fetch_assoc();

          
      		$_SESSION['recepname']=$final['FirstName']." ".$final['LastName'];
         	$_SESSION['user'] = $email;
         	echo "Logged in!";	
          $name=$_SESSION['recepname'];

         echo "Logged in. Welcome" .$name;
        header("location: recephome.php");             
      	}
        else 
        {
        echo '<script language="javascript">';
        echo 'alert("Email or Password entered is invalid. Please try again.")';
        echo '</script>';
        }
      }
  }
?>

<?php
	include 'connect.php';
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
  <ul class="w3-navbar w3-text-white" id="myNavbar">
    <li><a href="index.php" class="w3-padding-large">HOME</a></li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">ADMIN LOG<span class="w3-hide-small">IN</span> </span>
  </div>
</div>


<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-center m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
      
      	<form name ="login" method="post" action="">
        <p><input class="w3-input-group w3-input w3-animate-input" type="email" name="email" placeholder="Email" required><br>
        </p>
        
        
        <p><input class="w3-input-group w3-input w3-animate-input" type="password" name="password" placeholder="Password" required><br>
        			
        </p>
        <p><input class="w3-radio" type="radio" name="employee" value="manager" required>Manager
        <input class="w3-radio" type="radio" name="employee" value="receptionist">Receptionist</p>
       
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
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>
