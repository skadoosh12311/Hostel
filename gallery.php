<?php
include('connection.php');
?>

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/gallery.css">
<title>
Gallery
</title>


</head>
	
<body>


<header>
<a href="index.php"><p class="logo"><img src="img/logo.png" style= "width:230px;height:100px;margin-top:-10px;margin-left:10px" align="left" </p> 
</a>
</header>

<header class="header1">
</header>
<div class="topnav">
<a href="index.php"> Home</a>
<a class= "active" href="gallery.php">Gallery</a>
  <a href="contact.php">Contact Us</a>
   <a href="locate.php">Location</a>
  <a href="about.php">About</a>
  <?php
        if (isset($_SESSION['username'])) {
            echo "<a href=\"#\">Welcome " . ($_SESSION['username']) . " </a>";
			echo "<a href=\"logout.php\"> Logout </a>";
		} else {
                echo "";
        }
	?>
</div>

<div class="container-all">
	<div class="container">
	<img class="img1" src="img/hos1.jpg" alt="">
	<span class="title">Male dorm</span>
	<span class="text"> Get crazy with your male friends. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos2.jpg" alt="" style="float:right">
	<span class="title">Exterior 2</span>
	<span class="text">Hostel will be a breath of fresh air
	if you are not accustomed to the chaos of the city <span>
</div>

<div class="container">
	<img class="img1" src="img/hos3.jpg" alt="" style="float:right">
	<span class="title">Exterior 1</span>
	<span class="text">Be prepared to experience Mumbai like a 
	local both inside and outside the hostel. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos4.jpg" alt="">
	<span class="title">Rooftop area detailed</span>
	<span class="text">A Bollywood themed rooftop, being bored is not an option here. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos5.jpg" alt="">
	<span class="title">Corridor/alley</span>
	<span class="text">Mumbai themed corridors. <span>
</div>


<div class="container">
	<img class="img1" src="img/hos6.jpg" alt="">
	<span class="title">Cafeteria</span>
	<span class="text">With a cafe, a common area full of games. <span>
</div>


<div class="container">
	<img class="img1" src="img/hos7.jpg" alt="">
	<span class="title">Rooftop area</span>
	<span class="text">A common rooftop, so everyone can hangout together. <span>
</div>


<div class="container">
	<img class="img1" src="img/hos8.jpg" alt="">
	<span class="title">Deluxe Private Room</span>
	<span class="text">A double sized bed only for you. <span>
</div>


<div class="container">
	<img class="img1" src="img/hos9.jpg" alt="">
	<span class="title">Female Dorm 2</span>
	<span class="text">Feel more comfortable in an all-female space. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos10.jpg" alt="">
	<span class="title">Male dorm 2</span>
	<span class="text">Get crazy with your male friends. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos11.jpg" alt="">
	<span class="title">Female dorm 3</span>
	<span class="text">Get crazy with your male friends. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos13.jpg" alt="">
	<span class="title">Common room</span>
	<span class="text">Get crazy and hangout together<span>
</div>

<div class="container">
	<img class="img1" src="img/hos14.jpg" alt="">
	<span class="title">Male dorm 3</span>
	<span class="text">Get crazy with your male friends. <span>
</div>

<div class="container">
	<img class="img1" src="img/hos12.jpg" alt="">
	<span class="title">The yard</span>
	<span class="text">For late night walks<span>
</div>

<div class="container">
	<img class="img1" src="img/hos15.jpg" alt="">
	<span class="title">Reception</span>
	<span class="text"> 24/7 for you <span>
</div>

	</div>
</div>

<div img src="arrowup.png" style="right: 10px; bottom 15px; position:fixed;">
</div>

<button class="myBtn" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>