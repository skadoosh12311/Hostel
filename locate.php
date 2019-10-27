<?php
include('connection.php');
?>
<html>
<head>
 
<link rel="stylesheet" href="css/locate.css">
<title>
Locate Us
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
<a  href="index.php"> Home</a>
<a href="gallery.php">Gallery</a>
  <a href="contact.php">Contact Us</a>
   <a class= "active" href="locate.php">Location</a>
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

<div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.731259916486!2d72.88149331539664!3d19.11944198706307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8108601279b%3A0x93500a8d8d1d0d92!2sZostel%20Mumbai!5e0!3m2!1sen!2sin!4v1570165147309!5m2!1sen!2sin" 
width="1800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<style>
</style
</body>
</html>