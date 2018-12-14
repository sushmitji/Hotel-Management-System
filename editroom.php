<?php
	include 'connect.php';
	session_start();
	$roomno = $_GET['id'];
  $query = "SELECT * FROM room WHERE Roomno =".(int)$roomno;
  $result=$mysqli->query($query);
  $result = $result->fetch_assoc();


  if($_SERVER["REQUEST_METHOD"] == "POST")
  {

    $tariff = $_POST['tariff'];
    $choice = $_POST['choice'];
    $type = $_POST['type'];
    $view = $_POST['view'];
    $capacity = $_POST['capacity'];

    $query = "UPDATE room SET Tariff=".(int)$tariff.", Choice ='$choice', Type='$type', View='$view', Capacity=".(int)$capacity." WHERE Roomno=".(int)$roomno;
    $result = $mysqli->query($query) or die("BOOM");

    if($result)
    {
        echo "<script>";
        echo 'window.alert("Room details updated successfully!")';
        echo "</script>";
    }

  }





?>
<!DOCTYPE html>
<html>
<title>Edit room details</title>
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    echo "<script>";
    echo 'window.location.assign("modifyroom.php")';
    echo "</script>";
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
    background-image: url('r1.jpg');
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
      <a href="manager.php" class="w3-padding-large w3-white w3-hover-text-black"><?php echo $_SESSION['managername']; ?></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">EDIT<span class="w3-hide-small">  ROOM DETAILS</span> </span>
  </div>
</div>


<!-- Container (Section) -->
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <p>
  <li class="w3-padding-xlarge w3-center"><a href="managerhome.php" style="text-decoration: none">Manager Home</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="employee.php" style="text-decoration: none">Employee Details</a></li>
  <li class="w3-padding-xlarge w3-center w3-deep-purple"><a href="modifyroom.php" style="text-decoration: none">Room Details</a></li>
  
  <li class="w3-padding-xlarge w3-center"><a href="managercustomer.php" style="text-decoration: none">Customer Details</a></li>
  </p>
  </ul>
  </div>
  <div class="w3-col m2 w3-container w3-section">
    </div>
  <div class="w3-col m4 w3-container w3-section">
<ul class="w3-card-16 w3-ul">
  <li class="w3-padding-large">
  <form name ="editroom" method="post" action="">
      
  <li class="w3-padding-large">
      <p>
        <b>Tariff</b>
        <input class="w3-input-group w3-input w3-animate-input" type="number" name="tariff" value="<?php echo $result['Tariff']; ?>">
      </p>
   </li>

   <li class="w3-padding-large">
      <p>
        <b>Type</b>
        <select id="type" name="type" class="w3-select" required>
        <option value="deluxe">Deluxe</option>
        <option value="superdeluxe">Super Deluxe</option>
        <option value="suite">Family suite</option>
        </select>
      </p>
   </li>

   <li class="w3-padding-large">
      <p>
        <b>Choice</b>
        <select id="choice" name="choice" class="w3-select" required>
        <option value="ac">AC</option>
        <option value="nonac">Non-AC</option>
        </select>
      </p>
   </li>

   <li class="w3-padding-large">
      <p>
        <b>View</b>
        <select id="view" name="view" class="w3-select" required>
        <option value="garden">Garden</option>
        <option value="swimmingpool">Swimming Pool</option>
        <option value="mountains">Mountains</option>
        </select>
      </p>
   </li>

   <li class="w3-padding-large">
      <p>
        <b>Capacity</b>
        <input class="w3-input-group w3-input w3-animate-input" type="number" name="capacity" value="<?php echo $result['Capacity']; ?>">
      </p>
   </li>

   </ul>
      
      <input type="submit" value="Submit" class="w3-btn w3-section w3-center"></input>

      </form>






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

<?php
  if($result['Type']=='deluxe')
  {
    echo '<script>';
    echo 'var x = document.getElementById("type");';
    echo 'x.options[0].selected=true;';
    echo '</script>';
  }
  else if($result['Type']=='superdeluxe')
  {
    echo '<script>';
    echo 'var x = document.getElementById("type");';
    echo 'x.options[1].selected=true;';
    echo '</script>';
  }
  else
  {
    echo '<script>';
    echo 'var x = document.getElementById("type");';
    echo 'x.options[2].selected=true;';
    echo '</script>';
  }

  if($result['Choice']=='ac')
  {
    echo '<script>';
    echo 'var x = document.getElementById("choice");';
    echo 'x.options[0].selected=true;';
    echo '</script>';
  }
  else
  {
    echo '<script>';
    echo 'var x = document.getElementById("choice");';
    echo 'x.options[1].selected=true;';
    echo '</script>';
  }

  if($result['View']=='garden')
  {
    echo '<script>';
    echo 'var x = document.getElementById("view");';
    echo 'x.options[0].selected=true;';
    echo '</script>';
  }

  else if($result['View']=='swimmingpool')
  {
    echo '<script>';
    echo 'var x = document.getElementById("view");';
    echo 'x.options[1].selected=true;';
    echo '</script>';
  }
  else
  {
    echo '<script>';
    echo 'var x = document.getElementById("view");';
    echo 'x.options[2].selected=true;';
    echo '</script>';
  }




  ?>



</body>
</html>

