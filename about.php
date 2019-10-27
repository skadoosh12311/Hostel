<?php
include('connection.php');
?>
<html>
<head>
 
<link rel="stylesheet" href="css/about.css">
<title>
About Us
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
   <a href="locate.php">Location</a>
  <a class= "active" href="about.php">About</a>
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
<h3> <i> The Hostel Management System is developed for automating the activities of the hostel.
The system will be great relief to the students and the managers. This system will help user in case 
of reporting, registration and searching the information about students and rooms. The aim of the 
Hostel Management system is to carry out the activities of hostel in an efficient way. It will help to take 
the operations of the hostel to an upper level by providing faster access to data and allowing addition,
upgradation, modification and deletion of data in a very systemmatic and reliable manner. 
<br>
<br>
If the traveller in you is calling out, we’ll hear it well. Each day in Zostel is happening, complete with doses of laughter and experiences. Chill out with the coolest set of people from around the world and travel without hassle. Before your mischievous mind starts wandering far, let us put one thing real straight - we take the comfort of each and every traveller very seriously. If getting intoxicated is all you’re looking for, please look ELSEWHERE. 
At Zostel, we’d rather pass and share episodes. ;) </i>
</h3> 
</div>
<style>
</style
</body>
</html>