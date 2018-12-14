<!DOCTYPE html>
<html>
<title>Hotel Transylvania</title>
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
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .mySlides{
    opacity: 1.0;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('image.jpg');
    min-height: 100%;
}
.bgimg-2 {
    background-image: url('hotel1.jpg');
    min-height: 200px;
}
.bgimg-3 {
    background-image: url('team.jpg');
    min-height: 200px;
}

.bgimg-4 {
    background-image: url('map.jpg');
    min-height: 200px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}


/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}a

</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar w3-text-white" id="myNavbar">
    <li><a href="#" class="w3-padding-large">HOME</a></li>
    <li><a href="signup.php" class="w3-padding-large">SIGN UP</a></li>
    <li class="w3-hide-small w3-right">
      <a href="login.php" class="w3-padding-large w3-red w3-hover-text-black">LOG IN & BOOK ROOM</a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-white w3-xlarge w3-wide w3-animate-opacity"> <img src="logo.png" height="45">HOTEL <span class="w3-hide-small"> TRANSYLVANIA </span> </span>
  </div>
</div>

<!-- Container (About Section) -->

<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"><em>We love holidays!</em></p>
  <p>Welcome to our website. We provide you best rooms at best deals, all at the ease of the hand! We have developed a Database for Hotel Management System which allows us to keep track of all customers and their details, as well as Room details and their Availability</p>
</div>

<!-- Container (Team Section) -->
  <div class="bgimg-3 w3-display-container" id="image">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-black w3-wide">OUR TEAM</span>
  </div>
</div>
      <div class="w3-content w3-container w3-padding-64" align="center">
      

      
      <p class="w3-center"><em>Phew!! It was an intensive task!</em></p>
  <p>From Database creation to Database connectivity, from simple php form to CSS styling, it has been a long journey! And, this hard work has surely transformed into a masterpiece with the collaboration of our team and it's countless hours of thinking!</p>
    </div>

</div>
<!-- Container (Amenities Gallery) -->
<div class="bgimg-2 w3-display-container" id="image">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">AMENITIES</span>
  </div>
</div>

<!-- Container (Amenities Section) -->
<div class="w3-content w3-container w3-padding-64">
  <p class="w3-center"><em>You deserve a luxurious stay!</em></p></div>

<div class="w3-content w3-container w3-padding-64">
  <h4 class="w3-center w3-text-black">GUEST ROOMS</h4>
  <p class="w3-center w3-text-black">Work or relax. The choice, and the space, is yours.</p>
  <div class="w3-col m4 w3-container">
<p><ul class="w3-card-2 w3-ul w3-hoverable">
<li>Plush Bedding</li>
<li>Stylish Bathrooms</li>
<li>Flexible Workspaces</li>
<li>Free Wi-Fi*</li>
<li>Paul Mitchell® Grooming Essentials</li>
<li>King and Queen sized rooms</li>
<li>Courtyard Suites® (Larger Rooms Available)</li></ul> </p>
</div>
<div class="w3-col m4 w3-container w3-section"> <div class="w3-large w3-margin-bottom"><img src="1.jpg"></div></div></div>


<div class="w3-content w3-container w3-padding-64">
<h4 class="w3-center w3-text-black">LOBBY</h4>
  <p class="w3-center w3-text-black">The space that works for meetings, meals, or me-time.</p>
  <div class="w3-col m4 w3-container">
<p><ul class="w3-card-2 w3-ul w3-hoverable">
<li>Free Wi-Fi</li>
<li>GoBoard® Touchscreens for Info on the Go</li>
<li>Casual meeting and workspace</li>
<li>Business Center</li>
<li>24/7 Market</li>
</ul> </p>
</div>
<div class="w3-col m4 w3-container w3-section"> <div class="w3-large w3-margin-bottom"><img src="2.jpg"></div></div></div>



<div class="w3-content w3-container w3-padding-64">
<h4 class="w3-center w3-text-black">THE BISTRO</h4>
  <p class="w3-center w3-text-black">Grab 'n go snacks. Sit-down meals. We've got tastes to suit your speed.</p>

<div class="w3-col m4 w3-container">

     <p><ul class="w3-card-4 w3-ul w3-hoverable">
<li>Take It To Go or Sit and Be Served</li>
<li>We Proudly Serve Starbucks® Coffee</li>
<li>Enjoy Seasonal Food and Cocktail Selections</li>
</ul> 
</p>
    
    </div>
    <div class="w3-col m4 w3-container w3-section"> <div class="w3-large w3-margin-bottom"><img src="3.jpg"></div></div></div>


<div class="w3-content w3-container w3-padding-64">
<h4 class="w3-center w3-text-black">GYM and POOL</h4>
  <p class="w3-center w3-text-black">Get your heart rate up or just let the day wind down.</p>

<div class="w3-col m4 w3-container">

     <p><ul class="w3-card-4 w3-ul w3-hoverable">
<li>24-hr Access to Exercise Equipment</li>
<li>Temperature-controlled Pool</li>
</ul> 
</p>
    
    </div>
    <div class="w3-col m4 w3-container w3-section"> <div class="w3-large w3-margin-bottom"><img src="4.jpg"></div></div></div>

<div class="w3-content w3-container w3-padding-64">
<h4 class="w3-center w3-text-black">OUTDOOR</h4>
  <p class="w3-center w3-text-black">Enjoy a cozy spot that’s outside the norm.</p>

<div class="w3-col m4 w3-container">

     <p><ul class="w3-card-4 w3-ul w3-hoverable">
<li>Space to Meet or Relax</li>
<li>Fire Pit</li>
<li>Comfortable Seating</li>
<li>Free Wi-Fi</li>
</ul> 
</p>
    
    </div>
    <div class="w3-col m4 w3-container w3-section"> <div class="w3-large w3-margin-bottom"><img src="5.jpg"></div></div></div>

        
  </div>
</div>

<!-- Container (Contact Section) -->
 <div class="bgimg-4 w3-display-container" id="image">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-black w3-wide">WHERE ARE WE</span>
  </div>
  </div>
  <p class="w3-center"><em>Enjoy your stay with us!</em></p>

  <div class="w3-row w3-padding-32 w3-section">

    <div class="w3-col m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker w3-hover-text-black" style="width:30px"></i> Hotel Transylvania, 12345, Ashiana Road, Lucknow, Uttar Pradesh<br>
        <i class="fa fa-phone w3-hover-text-black" style="width:30px"></i> Phone: +91 7092429991<br>
        <i class="fa fa-envelope w3-hover-text-black" style="width:30px"> </i> Email: sushmitji@gmail.com<br>
      </div>
        
  </div>
</div>
  


<!-- Footer -->
<footer class="w3-center w3-padding-64 w3-black">
  <p class="w3-center w3-padding-large">Developed with <img src="heart.png" height="16"> by $U$#M!╪ &copy</p>
  <p><right class="w3-center w3-hover-red w3-padding-large"><a href="adminlogin.php" class="w3-hover-red">ADMIN LOGIN</a></right></p>
</footer>

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

<script>
$( document.getElementById("image") )(function() {
  $( this ).switchClass( "bgimg-2", "bgimg-1", 1000, "easeInOutQuad" );
});
</script>

</body>
</html>

