<?php
include('connection.php');
?>

<html>
<head>
 
<link rel="stylesheet" href="css/contact.css">
<title>
Contact Us
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
  <a class= "active" href="contact.php">Contact Us</a>
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
<div class="container">
<div class="row">
<div class="column">
 <div class="card"><img src="img/pin.png" style="width:50px;height:50px;align:left">
 <h3 style="cursor:pointer">ADDRESS</h3><br><h3 style="cursor:pointer"><i>Mumbai Karotra Niwas, Near Prime Academy School, Off Milatery Road,
 Marol, Andheri East-400059</i> </h3>
 </div>
 
  </div>
  
  <div class="column">
 <div class="card"> <img src="img/call.png" style="width:50px;height:50px;align:left">
 <h3 style="cursor:pointer">PHONE</h3><br><h3 style="cursor:pointer"><i>022-4896-2270<br>022-2804-0076<br>(toll free number)</i></h3>
 </div>
  </div>
  
  <div class="column">
 <div class="card"><img src="img/email.png" style="width:50px;height:50px;align:left">
 <h3 style="cursor:pointer">EMAIL</h3><br><h3 style="cursor:pointer"><i>reservations@zostel.com<br>support@zostel.com</i></h3>
 </div>
  </div>
</div>
</div>
</body>
</html>